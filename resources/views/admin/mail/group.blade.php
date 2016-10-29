@extends('layouts.app')

@include('admin.mail.includes.editor')

@section('content')
    <form name="group_email" class="col s12 m12 l12" action="{{ route('app::admin.mail.group.send') }}" method="POST">
        <div id="non-skrollr">
            <div class="row">
                <h3><br>Send Group Email to contestants<br></h3>
                <h5>16th Amirkabir Collegiate Programming Contest - 04 Nov 2016</h5>
                <div class="divider"></div>
                <br>
                <div class="container-fluid">

                    <!-- Header -->
                    <div class="row">
                        <h5><i class="material-icons">settings_ethernet</i>Constraints</h5>
                        <div class="input-field col s6 m6 l6">
                            <div class="switch">
                                <label>
                                    OnSite teams
                                    <input type="checkbox" name=bcc_main">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <div class="switch">
                                <label>
                                    OnLine teams
                                    <input type="checkbox" name="bcc_online">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <div class="switch">
                                <label>
                                    Iranian Teams Only
                                    <input type="checkbox" name="bcc_iranian_only">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <div class="switch">
                                <label>
                                    Rejected teams
                                    <input type="checkbox" name="bcc_rejected">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <div class="switch">
                                <label>
                                    Approved teams
                                    <input type="checkbox" name="bcc_approved">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <div class="switch">
                                <label>
                                    Pending teams
                                    <input type="checkbox" name="bcc_pending">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <div class="switch">
                                <label>
                                    Reserved teams
                                    <input type="checkbox" name="bcc_reserved">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <div class="switch">
                                <label>
                                    Paid teams
                                    <input type="checkbox" name="bcc_paid">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <div class="switch">
                                <label>
                                    Outdated online registrations
                                    <input type="checkbox" name="bcc_online_old">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /Header -->

                    <!-- Title -->
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input name="title" id="title" class="validate" placeholder="Title">
                            <label for="title">Title</label>
                        </div>
                    </div>
                    <!-- /Title -->

                    <!-- Message -->
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <textarea name="body" id="body" class="materialize-textarea">{{ $message or '' }}</textarea>
                            <label for="textarea1">Message</label>
                        </div>
                    </div>
                    <!-- /Message -->

                    <div class="divider"></div>

                    <div class="row center">
                        {{--<div class="g-recaptcha col s12 m12 l12 center" data-sitekey="6LeP_ikTAAAAAPu_EgFICSpE6FCKrPkhiYtkVZX-"></div>--}}
                        <div class="input-field col s12 m12 l12">
                            <button class="btn waves-effect waves-light btn-large cyan" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
<script>
    $(function() {
        $('#body').froalaEditor()
    });
</script>
@endpush