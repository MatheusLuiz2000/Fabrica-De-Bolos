    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Fabrica De Bolos</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h5 class="page-title">Dashboard</h5>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card mini-stat m-b-30">
                        <div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi mdi-cake float-right mb-0"></i>
                            </div>
                            <h6 class="text-uppercase mb-0">Bolos Vendidos</h6>
                        </div>
                        <div class="card-body">
                            <div class="mt-4 text-muted">
                                <h5 class="m-0"><?= $bolos_vendidos->Total_Vendidos; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card mini-stat m-b-30">
                        <div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-network float-right mb-0"></i>
                            </div>
                            <h6 class="text-uppercase mb-0">Clientes</h6>
                        </div>
                        <div class="card-body">
                            <div class="mt-4 text-muted">
                                <h5 class="m-0"><?= $clientes->Total_Clientes; ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Vendido no Mês.</h4>
                            <div class="">
                                
                                <div class="row align-items-center mb-5">
                                    <div class="col-md-6">
                                        <div class="pl-3">
                                            <h3>$6451</h3>
                                            <h6>Monthly Earning</h6>
                                            <p class="text-muted">Sed ut perspiciatis unde omnis</p>
                                            <a href="#" class="text-primary">Learn more...</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <span class="peity-pie" data-peity='{ "fill": ["#54cc96", "#f2f2f2"]}' data-width="84" data-height="84">6/8</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div>
                                            <div class="mb-4">
                                                <span class="peity-donut" data-peity='{ "fill": ["#54cc96", "#f2f2f2"], "innerRadius": 22, "radius": 32 }' data-width="60" data-height="60">2,4</span>
                                            </div>
                                            <h4>42%</h4>
                                            <p class="mb-0 text-muted">Online Earning</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <div class="mb-4">
                                                <span class="peity-donut" data-peity='{ "fill": ["#54cc96", "#f2f2f2"], "innerRadius": 22, "radius": 32 }' data-width="60" data-height="60">8,4</span>
                                            </div>
                                            <h4>58%</h4>
                                            <p class="text-muted mb-0">Offline Earning</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Análise de Vendas</h4>
                                    <div id="morris-donut-example" class="morris-charts" style="height: 325px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Clientes Recentes</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2017/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2017/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2015/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2018/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2014/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2018/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2018/08/06</td>
                                            <td>$137,500</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- container fluid -->

    </div> <!-- Page content Wrapper -->

</div> <!-- content -->

