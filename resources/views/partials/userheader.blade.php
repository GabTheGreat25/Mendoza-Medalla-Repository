<nav class="navbar navbar-default" style="height: 7rem; padding-top: 1rem; font-size: 2rem; background-color:#d4e6be;">
    <div
        style="display: grid; grid-template-columns: .1fr 1fr auto; padding: 0 2rem; justify-items: center; align-items:center;">

        <div class="navbar-header" style="display: grid; justify-self: start;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}">
                <img src="/navbar/navbar-logo.png" alt="pet care" style="width: 11rem;">
            </a>
        </div>

        <div>
            <ul class="nav navbar-nav">
                <li style="padding: 0 1rem;">
                    <a href="{{ url('/consultations') }}">
                        <i class="fa fa-user-md" style="padding: 0 .5rem 0 0;" aria-hidden="true"></i> Consultations
                    </a>
                </li>

                <li style="padding: 0 1rem;">
                    <a href="{{ url('/transactions') }}">
                        <i class="fa fa-cart-arrow-down" style="padding: 0 .5rem 0 0;" aria-hidden="true"></i>
                        Transaction
                    </a>
                </li>

                {{-- <li style="padding: 0 1rem;">
                    <a href="{{ url('/dashboard') }}">
                        <i class="fa fa-area-chart" style="padding: 0 .5rem 0 0;" aria-hidden="true"></i>
                        <span style="font-size: 3.25rem;">&#128480;</span>
                        <span style="">Dashboard</span>
                    </a>
                </li> --}}

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><span style="font-size: 3.4rem;">&#128480;</span> Dashboard <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" style="font-size: 1.75rem;">
                        <div>
                            <ul class="nav navbar-nav">
                                <li style="padding: 0 1rem;">
                                    <a href="{{ url('/dashboard') }}">
                                        Pet Diseases/Injuries Chart
                                    </a>
                                </li>

                                <li style="padding: 0 1rem;">
                                    <a href="{{ url('/dashboardtransac') }}">
                                        Pets Groomed chart
                                    </a>
                                </li>
                        </div> <!-- /.container-fluid -->
                    </ul>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"> <i class="fa fa-archive" style="padding: 0 .5rem 0 0;"
                            aria-hidden="true"></i> Storage <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="font-size: 1.75rem;">

                        <div>
                            <ul class="nav navbar-nav">

                                {{-- <li style="padding: 0 1rem;">
                                    <a href="{{ url('admin.profile') }}">
                                        Profile
                                    </a>
                                </li> --}}

                                <li style="padding: 0 1rem;">
                                    <a href="{{ url('/customers') }}">
                                        Customer
                                    </a>
                                </li>

                                <li style="padding: 0 1rem;">
                                    <a href="{{ url('/animals') }}">
                                        Animals
                                    </a>
                                </li>

                                <li style="padding: 0 1rem;">
                                    <a href="{{ url('/employees') }}">
                                        Employee
                                    </a>
                                </li>

                                <li style="padding: 0 1rem;">
                                    <a href="{{ url('/services') }}">
                                        Pet Services
                                    </a>
                                </li>


                                {{-- <li style="padding: 0 1rem;">
                                    <a href="{{ url('/transactions') }}">
                                        Transaction
                                    </a>
                                </li> --}}

                                {{-- <li style="padding: 0 1rem;">
                                    <a href="{{ url('/customer') }}">
                                        Reactivate
                                    </a>
                                </li> --}}
                            </ul>
                </li>
                {{--
            </ul>
        </div> <!-- /.navbar-collapse --> --}}
    </div> <!-- /.container-fluid -->
    </ul>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->role }}
                    <span class="caret"></span></a>
                @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Guest <span
                        class="caret"></span></a>
                @endif
                <ul class="dropdown-menu" style="font-size: 1.75rem;">
                    @if (Auth::check())
                    <li style="padding-left: 2rem; white-space: nowrap; overflow: hidden;
                            text-overflow: ellipsis;">
                        <p> Welcome, {{ Auth::user()->userName }}</p>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('user.logout') }}">Logout</a></li>
                    @else
                    <li><a href="{{ route('customer.registers') }}">Customer Signup</a></li>
                    <li><a href="{{ route('employee.registers') }}">Employee Signup</a></li>
                    <li><a href="{{ route('admin.registers') }}">Admin Signup</a></li>
                    <li><a href="{{ route('user.signin') }}">Signin</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </div> <!-- /.navbar-collapse -->
    </div> <!-- /.container-fluid -->
</nav>