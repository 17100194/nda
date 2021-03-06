@extends('layouts.app')

@section('content')
    <section class="flat-row bg-gray3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-center">
                        @if(request()->is('submissions/professional'))
                            <h1 class="title">New Professional Entry</h1>
                        @else
                            <h1 class="title">New Student Entry</h1>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <form id="entry_form" class="col-md-6">
                    {{ csrf_field() }}
                    <input type="hidden" id="type" name="type" value="<?php if (request()->is('submissions/professional')):?>Professional<?php else:?>Student<?php endif?>">
                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="fontweight600">Project Title*</label>
                        <input id="title" type="text" name="title" value="{{ old('title') }}" required autofocus>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('by') ? ' has-error' : '' }}">
                        <label class="fontweight600"><?php if (request()->is('submissions/professional')):?>Designer/Firm*<?php else:?>Your Name*<?php endif?></label>
                        <input id="by" type="text" name="by" value="{{old('by')}}" required>
                        @if ($errors->has('by'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('by') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('for') ? ' has-error' : '' }}">
                        <label class="fontweight600"><?php if (request()->is('submissions/professional')):?>Client Name (Optional)<?php else:?>School Name (Optional)<?php endif?></label>
                        <input id="for" type="text" name="for" value="{{old('for')}}">
                        @if ($errors->has('for'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('for') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('overview') ? ' has-error' : '' }}">
                        <label class="fontweight600">Project Overview*<br><span style="font-size: 13px;">An overview of your project with the high level description and working of your project</span></label>
                        <textarea id="overview" name="overview" style="resize: none; height: 150px;" required>{{old('overview')}}</textarea>
                        <div class="text-right" style="margin-top: -50px;">
                            <span id="display_count_overview">500</span> words remaining
                        </div>
                        @if ($errors->has('overview'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('overview') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('details') ? ' has-error' : '' }}">
                        <label class="fontweight600">Project Details*<br><span style="font-size: 13px;">In depth description of your project, describing every aspect of it in detail</span></label>
                        <textarea id="details" name="details" style="resize: none; height: 150px;" required>{{old('details')}}</textarea>
                        <div class="text-right" style="margin-top: -50px;">
                            <span id="display_count_details">1500</span> words remaining
                        </div>
                        @if ($errors->has('details'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('team') ? ' has-error' : '' }}">
                        <h4>Team Members Names and Titles (Optional)<br>
                            <small>Maximum of 4</small></h4> <button class="btn btn-primary" id="add-member">+ Add Team Member</button>

                    </div>

                    <div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
                        <label class="fontweight600">External Link For Project (Optional but highly recommended)</label>
                        <input id="url" type="url" value="{{old('url')}}" name="url">
                        @if ($errors->has('url'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('video_url') ? ' has-error' : '' }}">
                        <label class="fontweight600">Video Link (Optional but highly recommended)<br><span style="font-size: 13px;">The video should be under or at 2 minutes and 30 seconds and must be in mp4 format and must accurately demonstrate the functionality of your project.</span></label>
                        <input id="video_url" type="url" value="{{old('video_url')}}" name="video_url">
                        @if ($errors->has('video_url'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('video_url') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('video_url') ? ' has-error' : '' }}">
                        <label class="fontweight600">How would you like to pay?</label>
                        <select id="payment_mthod" name="payment_method">
                            <option value="Easy Paisa">Easy Paisa</option>
                            <option value="Cash On Campus">Cash On Campus</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                    </div>

                    <h4>Award Categories* <br><small>You must select at least one category, <span style="font-weight: bold">Maximum of 3</span></small></h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="font-raleway">Architecture</label>
                                <div class="divider"></div>
                                <div style="padding-left: 20px;">
                                    <input type="checkbox" name="categories[]" value="Interior Design" id="interior">
                                    <label for="interior">Interior Design</label>
                                    <input type="checkbox" name="categories[]" value="Landscape Design" id="landscape">
                                    <label for="landscape">Landscape Design</label>
                                </div>
                                <div class="divider"></div>
                                <label class="font-raleway">Visual Communication Design</label>
                                <div class="divider"></div>
                                <div style="padding-left: 20px;">
                                    <input type="checkbox" name="categories[]" value="Static Design" id="static">
                                    <label for="static">Static Design</label>
                                    <input type="checkbox" name="categories[]" value="Animation Design" id="animation">
                                    <label for="animation">Animation Design</label>
                                </div>
                                <div class="divider"></div>
                                <input type="checkbox" name="categories[]" value="Game Design" id="game_design">
                                <label for="game_design">Game Design</label>
                                <input type="checkbox" name="categories[]" value="Design For Social Impact" id="design_social">
                                <label for="design_social">Design For Social Impact</label>
                            </div>
                            <div class="col-sm-6 padding-top-5">
                                <div class="divider hidden-xs hidden-sm"></div>
                                <div class="divider"></div>
                                <input type="checkbox" name="categories[]" value="Education Initiative" id="education">
                                <label for="education">Education Initiative</label>
                                <input type="checkbox" name="categories[]" value="Product Design" id="product-design">
                                <label for="product-design">Product Design</label>
                                <input type="checkbox" name="categories[]" value="Fashion & Textile" id="fashion">
                                <label for="fashion">Fashion & Textile</label>
                                <input type="checkbox" name="categories[]" value="Furniture & Lighting" id="furniture">
                                <label for="furniture">Furniture & Lighting</label>
                                <input type="checkbox" name="categories[]" value="Packaging" id="packaging">
                                <label for="packaging">Packaging</label>
                                <input type="checkbox" name="categories[]" value="Print & Published Media" id="print">
                                <label for="print">Print & Published Media</label>
                                <input type="checkbox" name="categories[]" value="UI/UX Design" id="ui-ux">
                                <label for="ui-ux">UI/UX Design</label>
                                <input type="checkbox" name="categories[]" value="Emerging Technologies" id="emerging-technologies">
                                <label for="emerging-technologies">Emerging Technologies</label>
                            </div>
                        </div>
                        <div class="{{ $errors->has('categories') ? ' has-error' : '' }} padding-top-20">
                            @if ($errors->has('categories'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </form>
                <div class="col-md-6">
                    <label class="fontweight600">Project Images*</label>
                    <form action="{{url('upload-images')}}" class="dropzone" id="images">
                        {{csrf_field()}}
                    </form>
                    <br><br>
                    <label class="fontweight600">Project PDF (Optional)</label>
                    <form action="{{url('upload-pdf')}}" class="dropzone" id="pdf">
                        {{csrf_field()}}
                    </form>
                    <br><br>
                    <label class="fontweight600">Project Thumbnail*</label>
                    <form action="{{url('upload-thumbnail')}}" class="dropzone" id="thumbnail">
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
            <div class="row padding-top-20">
                <div class="form-group text-center">
                    <button id="submit_entry" class="flat-button">Submit Entry</button>
                </div>
            </div>
        </div>
    </section>
@endsection