@extends('home.layouts.app')

@section('title', 'Contatos')

@section('content')
    <div id="ttr_page" class="container">
        <div id="ttr_content_and_sidebar_container">
            <div id="ttr_content">
                <div id="ttr_content_margin" class="container-fluid">
                    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                    <div class="ttr_Contact_html_row0 row">
                        <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ttr_Contact_html_column00">
                                <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;">
                                </div>
                                <div class="html_content">
                                    <p style="text-align:Center;"><span
                                            style="font-family:'Arial';font-weight:700;font-size:2em;color:rgba(5,38,55,1);">
                                            CONTATOS</span></p>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('send.contact') }}" method="post">
                        <label for="">Nome</label>
                        <input type="text" name="nome">

                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </form>
                </div>
                <div class="col-lg-6">
                    6
                </div>
            </div>
        </div>
    </div>

@endsection


