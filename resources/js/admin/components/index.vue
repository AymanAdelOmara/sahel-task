<template>
    <div>
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">الرئيسية</h2>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Row -->
        <div class="sidemenu-height">
            <!-- Row -->
            <div class="row">

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد الشركاء</p>
                                <div class="mr-auto">
                                    <i class="fab fa-rev fs-20 text-secondary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{partnersCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد الادارة</p>
                                <div class="mr-auto">
                                    <i class="fas fa-dollar-sign fs-20 text-success"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{adminsCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد طلبات التواصل</p>
                                <div class="mr-auto">
                                    <i class="fas fa-signal fs-20 text-info"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{contactRequestsCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد العروض</p>
                                <div class="mr-auto">
                                    <i class="fas fa-chart-line fs-20 text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{offersCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End  Row -->
            <!-- Row -->
            <div class="row">

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد العملاء</p>
                                <div class="mr-auto">
                                    <i class="fas fa-chart-line fs-20 text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{customersCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد نقاط العملاء الحالي</p>
                                <div class="mr-auto">
                                    <i class="fas fa-chart-line fs-20 text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{currentCustomersPoints}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">إجمالى عدد النقاط المكتسبة</p>
                                <div class="mr-auto">
                                    <i class="fab fa-rev fs-20 text-secondary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{totalEarnPoins}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">اجمالى عدد النقاط المنفقة</p>
                                <div class="mr-auto">
                                    <i class="fas fa-dollar-sign fs-20 text-success"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{totalSpinPoins}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">إجمالى عدد العمليات</p>
                                <div class="mr-auto">
                                    <i class="fas fa-chart-line fs-20 text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{transactionsCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد العمليات المكتملة</p>
                                <div class="mr-auto">
                                    <i class="fas fa-chart-line fs-20 text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{transactionsCompleteCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">عدد العمليات غير المكتملة</p>
                                <div class="mr-auto">
                                    <i class="fab fa-rev fs-20 text-secondary"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{transactionsNotCompleteCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card custom-card">
                        <div class="card-body dash1">
                            <div class="d-flex">
                                <p class="mb-1 tx-inverse">اجمالى عدد الاسئلة الشائعة</p>
                                <div class="mr-auto">
                                    <i class="fas fa-dollar-sign fs-20 text-success"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="dash-25">{{questionsCount}}</h3>
                            </div>
                            <div class="progress mb-1">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs bg-info" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End  Row -->
        </div>
        <!-- End Row -->
    </div>
</template>

<script>

    export default {
        name: "index",
        data() {
            return {
                customersCount: null,
                currentCustomersPoints: null,
                totalEarnPoins: null,
                totalSpinPoins: null,

                offersCount: null,
                partnersCount: null,
                contactRequestsCount: null,
                adminsCount: null,

                questionsCount: null,
                transactionsCount: null,
                transactionsCompleteCount: null,
                transactionsNotCompleteCount: null,
            }
        },
        mounted() {
        }
    }
</script>
