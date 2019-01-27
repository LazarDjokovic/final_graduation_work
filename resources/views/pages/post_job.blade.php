@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Post Job Add</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <form id="contact-form" method="post" action="contact.php" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Title *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Title" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Position *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Position" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Starts at: *</label> <input class="form-control fromDate"  type="date" name="from" id="from" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ends at: *</label> <input class="form-control toDate" type="date" name="to" id="to" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Image (optional)</label>
                                <div class="custom-file" id="customFile" lang="es">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Desctiption *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Description" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Add Job">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection