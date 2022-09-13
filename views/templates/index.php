<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">&#xE894;</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Global Sales by Top Locations</h4>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/US.png">
                                                    </div>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right">
                                                    2.920
                                                </td>
                                                <td class="text-right">
                                                    53.23%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/DE.png">
                                                    </div>
                                                </td>
                                                <td>Germany</td>
                                                <td class="text-right">
                                                    1.300
                                                </td>
                                                <td class="text-right">
                                                    20.43%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/AU.png">
                                                    </div>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right">
                                                    760
                                                </td>
                                                <td class="text-right">
                                                    10.35%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/GB.png">
                                                    </div>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right">
                                                    690
                                                </td>
                                                <td class="text-right">
                                                    7.87%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/RO.png">
                                                    </div>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right">
                                                    600
                                                </td>
                                                <td class="text-right">
                                                    5.94%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="flag">
                                                        <img src="<?= base_url() ?>/assets/img/flags/BR.png">
                                                    </div>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right">
                                                    550
                                                </td>
                                                <td class="text-right">
                                                    4.34%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <div id="worldMap" class="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="rose" data-header-animation="true">
                        <div class="ct-chart" id="websiteViewsChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Website Views</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="green" data-header-animation="true">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Daily Sales</h4>
                        <p class="category">
                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> updated 4 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="blue" data-header-animation="true">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <i class="material-icons">refresh</i>
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button>
                        </div>
                        <h4 class="card-title">Completed Tasks</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">weekend</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Bookings</p>
                        <h3 class="card-title">184</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Website Visits</p>
                        <h3 class="card-title">75.521</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Google Analytics
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">store</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Revenue</p>
                        <h3 class="card-title">$34,245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Followers</p>
                        <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3>Manage Listings</h3>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="<?= base_url() ?>/assets/img/card-2.jpeg">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Cozy 5 Stars Apartment</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$899/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> Barcelona, Spain</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="<?= base_url() ?>/assets/img/card-3.jpeg">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Office Studio</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$1.119/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> London, UK</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="<?= base_url() ?>/assets/img/card-1.jpeg">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Beautiful Castle</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$459/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> Milan, Italy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>