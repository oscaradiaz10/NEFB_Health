<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic Table with API Data</title>

</head>
<body>

<div class="page-content">
        
        <div id="agentSearchFilter" class="filter inline">
        <h2>Search for a local agent.</h2>
        <p>Find an agent simply by entering your zip code and search.</p>
    
            <div id="filterForm" class="grid-x grid-margin-x">
                <div class="cell large-auto">
                    <div class="form-group">
                        <label for="searchText">Search</label>
                        <input id="searchText" type="text" placeholder="Enter agent name or zip code">
                    </div>
                </div>
                <div class="cell large-shrink">
                    <div class="form-group">
                        <button id="searchBtn" class="button primary" type="button">
                            <span class="button-icon fas fa-search" aria-hidden="true"></span>
                            <span class="button-text">Search</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ko if: agents().length > 0 --><!-- /ko -->
        
        <div class="empty-state" style="display: none; height: unset;" aria-live="assertive" role="region">
            <p class="lead">No agents found.</p>
        </div>
    </div>

  <script type="text/javascript">
    
    
    function AgentSearchViewModel() {
        
        var self = this;
        var _invalidPage = "Invalid page number.";
        var _pageSize = 8;
        self._allAgents = ko.observableArray([]);
        self._numberPages = ko.observable(Math.ceil(self._allAgents().length / 8));
        var _currentPage = ko.observable(1);
        var _maxIndex = google.maps.Marker.MAX_ZINDEX;
        var _getMaxIndex = function () {
            _maxIndex++;
            return _maxIndex;
        };

        self.agents = ko.computed(function () {
            var bIndex = (_currentPage() - 1) * _pageSize;
            var eIndex = _currentPage() * _pageSize;
            var agents = self._allAgents().slice(bIndex, eIndex);
            return agents;
        });
        self.NextPage = function () {
            if (_currentPage() < self._numberPages())
                _currentPage(_currentPage() + 1);

            return false;
        };
        self.PrevPage = function () {
            if (_currentPage() > 1)
                _currentPage(_currentPage() - 1);

            return false;
        };
        self.CurrentPageNumber = ko.pureComputed({
            read: function () { return _currentPage(); },
            write: function (value) {
                if (isNaN(value))
                    throw _invalidPage;
                if (value < 1 || value > self._numberPages())
                    throw _invalidPage;
                _currentPage(value);

                return false;
            },
            owner: self
        });
        self.SetSelectedAgent = function (agentId, name) {
            self.SelectedAgentId(agentId);
            self.SelectedAgentName(name);
        };
        self.SelectedAgentId = ko.observable(null);
        self.SelectedAgentName = ko.observable(null);

        var _PagerPage = function (text, clickFx, isActive, isEndLink) {
            var self = this;
            self.PagerAction = clickFx;
            self.PagerText = text;
            self.PagerIsActive = isActive;
            self.PagerEndLink = isEndLink;
        };
        self.Pages = ko.computed(function () {
            var pages = [];
            if (self._numberPages() > 1) {
                if (_currentPage() === 1) {
                    pages.push(new _PagerPage('<span class="fas fa-caret-left" aria-hidden="true"></span><span class="sr-only">Previous Page</span>', self.PrevPage, false, true));
                } else {
                    pages.push(new _PagerPage('<span class="fas fa-caret-left" aria-hidden="true"></span><span class="sr-only">Previous Page</span>', self.PrevPage, true, true));
                }

                for (var i = 1; i <= self._numberPages(); i++) {
                    var isActive = i === _currentPage() ? false : true;
                    pages.push(new _PagerPage(i, self.CurrentPageNumber.bind(this, i), isActive, false));
                }

                if (_currentPage() === self._numberPages()) {
                    pages.push(new _PagerPage('<span class="fas fa-caret-right" aria-hidden="true"></span><span class="sr-only">Next Page</span>', self.NextPage, false, true));
                } else {
                    pages.push(new _PagerPage('<span class="fas fa-caret-right" aria-hidden="true"></span><span class="sr-only">Next Page</span>', self.NextPage, true, true));
                }
            }

            return pages;
        });
    }

    var vm = new AgentSearchViewModel();
    ko.applyBindings(vm, document.getElementById('agentSearch'));


    function renderData(data) {
        vm._allAgents(data);
        vm._numberPages(Math.ceil(vm._allAgents().length / 8));
        
        // toggle the empty state based on agent list length
        if (vm._allAgents().length <= 0) {
            emptyState.style.display = 'flex';
        } else {
            emptyState.style.display = 'none';
        }
    }
    
    let emptyState = document.querySelector('.empty-state');
    
    function searchByZip(lat, lon, zip) {
        $.ajax({
            url: "https://q-ebexternal.fbfs.com/fbfsservices/api/agents/search/ByLocation?usStateAbbreviation=NE&latitude=41.500000&longitude=-100.000000&onlyHealthBenefitCertified=true",
            data: { zipCode: zip, latitude: lat, longitude: lon },
            contentType: "application/json; charset=utf-8",
            traditional: true,
            type: "GET",
            dataType: "json",
            success: function(data) {
                renderData(data);
            },
            error: function(x) {
                console.log("Error " + x.responseText + "  " + x.status);
            }
        });
    }

    function searchByName(searchText) {
        $.ajax({
            url: "https://q-ebexternal.fbfs.com/fbfsservices/api/agents/search/ByName?agentName=FirstName&usStateAbbreviation=LastName&onlyHealthBenefitCertified=true",
            data: { searchText: searchText },
            contentType: "application/json; charset=utf-8",
            traditional: true,
            type: "GET",
            dataType: "json",
            success: function(data) {
                renderData(data);
                console.log('name success');
            },
            error: function(x) {
                console.log('name fail');
                console.log("Error " + x.responseText + "  " + x.status);
            }
        });
    }

    $(document).ready(function() {
        var geoOptions = {
            enableHighAccuracy: true
        }

        var geoSuccess = function(position) {
            var crd = position.coords;

            //attempt to get zipcode from geodata
            var geocoder = new google.maps.Geocoder();
            getZipCode(geocoder, crd.latitude, crd.longitude);

        };
        
        var geoError = function(error) {
            console.log("Error occurred. Error code: " + error.code);
        };

        if (navigator.geolocation) {
            console.log("Geolocation is supported!");
            navigator.geolocation.getCurrentPosition(geoSuccess, geoError, geoOptions);
        } else {
            alert("Geolocation is not supported for this Browser/OS version yet.");
        }
        
        //user hits enter on search box
        $('#searchText').on('keydown', function (e) {
            if (e.which === 13) {
                //$("#searchResultGrid").data("kendoGrid").dataSource.read();
                //$("#searchGridId").show();
                userSearch();
            }
        });
        
        //User clicks on search button
        $("#searchBtn").click(function() {
            userSearch();
        });
        
        function userSearch() {
            var searchText = $("#searchText").val();

            //run if zipcode
            if (/^\d+$/.test(searchText) && searchText.length == 5) {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'address': searchText },
                    function(results, status) {
                        emptyState.style.display = 'none';
                        if (status == google.maps.GeocoderStatus.OK) {
                            searchByZip(results[0].geometry.location.lat(),
                                results[0].geometry.location.lng(),
                                results[0].address_components[0].short_name
                            );
                        } else {
                            emptyState.style.display = 'flex';
                            console.log('Geocode was not successful for the following reason: ' + status);
                        }
                    });
            } else {
                searchByName(searchText);
            }
        }
    });

    //Gets the zip code from latitude and longitude
    function getZipCode(geocoder, lat, lon) {
        try {
            var latlng = { lat: parseFloat(lat), lng: parseFloat(lon) };
            geocoder.geocode({ 'location': latlng },
                function(results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            for (var i = 0; i < results[0].address_components.length; i++) {

                                if (results[0].address_components[i].types[0] === "postal_code") {
                                    $("#searchText").val(results[0].address_components[i].short_name);
                                    searchByZip(lat, lon, results[0].address_components[i].short_name);
                                    return results[0].address_components[i].short_name;
                                }
                            }
                        }
                    }
                });
        } catch (err) {
        }
    }

</script>
  
</body>
</html>