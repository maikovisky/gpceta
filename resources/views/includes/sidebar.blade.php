 

<div class='site-menubar-body'>
    <div>
        <div>
            <!-- sidebar nav -->
            <ul class="site-menu">
                @if (Auth::check())
                <li class="site-menu-item has-sub">
                    <a data-slug="library" href="javascript:void(0)">
                        <i class="site-menu-icon" aria-hidden="true">
                        <img src="{{URL::asset("images/icon-lib-branco.png")}}" width="50px">
                        </i>
                        <span class="site-menu-title">Library</span>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('farm')}}" data-slug="library-farm">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Farm')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('field')}}" data-slug="library-field">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Field')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('tillage')}}" data-slug="library-tillage">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Tillage')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('owner')}}" data-slug="library-owner">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Owner')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('crop')}}" data-slug="library-crop">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Crop')}}</span>
                            </a>
                        </li>
                         <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('equipment')}}" data-slug="library-equipment">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Equipment')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('seed')}}" data-slug="library-seed">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Seed')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('pest')}}" data-slug="library-pest">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Pest')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('agrochemical')}}" data-slug="library-agrochemical">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Agrochemical')}}</span>
                            </a>
                        </li>
                         <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('fertilizer')}}" data-slug="library-fertilizer">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Fertilizer')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('factor')}}" data-slug="library-factor">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Factor')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- WORK -->
                <li class="site-menu-item">
                    <a data-slug="work" href="javascript:void(0)">
                        <i class="site-menu-icon" aria-hidden="true">
                            <img src="{{URL::asset("images/icon-trab-branco.png")}}" width="50px">
                        </i>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('importdata')}}" data-slug="work-importdata">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.ImportData')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('newmap')}}" data-slug="work-newmap">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.NewMap')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('samplinggrid')}}" data-slug="work-samplinggrid">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.SamplingGrid')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('form')}}" data-slug="work-formula">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Formula')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('calculatemap')}}" data-slug="work-calculatemap">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.CalculateMap')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- OPERA -->
                <li class="site-menu-item">
                    <a data-slug="operation" href="javascript:void(0)">
                        <i class="site-menu-icon" aria-hidden="true">
                            <img src="{{URL::asset("images/icon-opera-branco.png")}}" width="50px">
                        </i>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('exportfile')}}" data-slug="operation-exportfile">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.ExportFile')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('importappliedmap')}}" data-slug="operation-importappliedmap">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.ImportAppliedMap')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('importcropmap')}}" data-slug="operation-importcropmap">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.ImportCropMap')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- REPORT -->
                <li class="site-menu-item">
                    <a data-slug="report" href="javascript:void(0)">
                        <i class="site-menu-icon" aria-hidden="true">
                            <img src="{{URL::asset("images/icon-report-branco.png")}}" width="50px">
                        </i>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('print')}}" data-slug="report-print">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Print')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('exportfigure')}}" data-slug="report-exportfigure">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.ExportFigure')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- SETUP -->
                <li class="site-menu-item">
                    <a data-slug="setup" href="javascript:void(0)">
                        <i class="site-menu-icon" aria-hidden="true">
                            <img src="{{URL::asset("images/icon-setup-branco.png")}}" width="50px">
                        </i>
                    </a>
                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('breaks')}}" data-slug="setup-breaks">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Breaks')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('culture')}}" data-slug="setup-culture">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Culture')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('unit')}}" data-slug="setup-unit">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Unit')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a data-slug="setup-location" href="javascript:void(0)">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Location')}}</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{URL::asset('country')}}" data-slug="setup-location-country">
                                        <i class="site-menu-icon " aria-hidden="true"></i>
                                        <span class="site-menu-title">{{Lang::get('general.Country')}}</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{URL::asset('state')}}" data-slug="setup-location-state">
                                        <i class="site-menu-icon " aria-hidden="true"></i>
                                        <span class="site-menu-title">{{Lang::get('general.State')}}</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="{{URL::asset('city')}}" data-slug="setup-location-city">
                                        <i class="site-menu-icon " aria-hidden="true"></i>
                                        <span class="site-menu-title">{{Lang::get('general.City')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('company')}}" data-slug="setup-company">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Company')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('person')}}" data-slug="setup-person">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Person')}}</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{URL::asset('team')}}" data-slug="setup-team">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">{{Lang::get('general.Team')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
               @endif
            </ul>
            <div class="site-menubar-section">
            </div>
        </div>
    </div>
</div>

