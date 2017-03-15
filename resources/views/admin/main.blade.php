@extends('layouts.admin')

@section ('content')
	
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Users</div>
                                    <div class="pull-right"><span class="badge badge-info">1,234</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Vincent</td>
                                                <td>Gabriel</td>
                                                <td>@gabrielva</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Orders</div>
                                    <div class="pull-right"><span class="badge badge-info">752</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Coat</td>
                                                <td>02/02/2013</td>
                                                <td>$25.12</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacket</td>
                                                <td>01/02/2013</td>
                                                <td>$335.00</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Shoes</td>
                                                <td>01/02/2013</td>
                                                <td>$29.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Clients</div>
                                    <div class="pull-right"><span class="badge badge-info">17</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Vincent</td>
                                                <td>Gabriel</td>
                                                <td>@gabrielva</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Invoices</div>
                                    <div class="pull-right"><span class="badge badge-info">812</span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>02/02/2013</td>
                                                <td>$25.12</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>01/02/2013</td>
                                                <td>$335.00</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>01/02/2013</td>
                                                <td>$29.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>

					<div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Buttons</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                       <h4>Small Buttons</h4>
                                       <p>
											<button class="btn btn-mini">Button</button>
											<button class="btn btn-primary btn-mini">Button</button>
											<button class="btn btn-info btn-mini">Button</button>
											<button class="btn btn-success btn-mini">Button</button>
											<button class="btn btn-warning btn-mini">Button</button>
											<button class="btn btn-danger btn-mini">Button</button>
											<button class="btn btn-inverse btn-mini">Button</button>
										</p>
										<h4>Normal Buttons</h4>
										<p>
											<button class="btn">Button</button>
											<button class="btn btn-primary">Button</button>
											<button class="btn btn-info">Button</button>
											<button class="btn btn-success">Button</button>
											<button class="btn btn-warning">Button</button>
											<button class="btn btn-danger">Button</button>
											<button class="btn btn-inverse">Button</button>
										</p>
										<h4>Large Buttons</h4>
										<p>
											<button class="btn btn-large">Button</button>
											<button class="btn btn-primary btn-large">Button</button>
											<button class="btn btn-info btn-large">Button</button>
											<button class="btn btn-success btn-large">Button</button>
											<button class="btn btn-warning btn-large">Button</button>
											<button class="btn btn-danger btn-large">Button</button>
											<button class="btn btn-inverse btn-large">Button</button>
										</p>

										<div class="well" style="margin-top:30px;">
							              <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
							              <button type="button" class="btn btn-large btn-block">Block level button</button>
							            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Button Dropdowns</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12" style="padding-bottom:30px;">
                                       <h4>Button Dropdowns</h4>
                                       <!-- button groups -->
                                       <div style="margin-top: 10px;">
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Danger <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
										  </div>
										  <div style="margin-top: 10px;">
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Warning <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">Success <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Info <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
											<div class="btn-group">
											  <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Inverse <span class="caret"></span></button>
											  <ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											  </ul>
											</div><!-- /btn-group -->
										  </div>
                                       <!-- / buton groups -->
                                       <h4>Split Button Dropdowns</h4>
                                       <!-- buton groups -->
                                       <div style="margin-top: 10px;" class="btn-toolbar">
										<div class="btn-group">
										  <button class="btn">Action</button>
										  <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
										<div class="btn-group">
										  <button class="btn btn-primary">Action</button>
										  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
										<div class="btn-group">
										  <button class="btn btn-danger">Danger</button>
										  <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
									  </div>
									  <div class="btn-toolbar">
										<div class="btn-group">
										  <button class="btn btn-warning">Warning</button>
										  <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
										<div class="btn-group">
										  <button class="btn btn-success">Success</button>
										  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
										<div class="btn-group">
										  <button class="btn btn-info">Info</button>
										  <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
									  </div>
									  <div class="btn-toolbar">
										<div class="btn-group">
										  <button class="btn btn-inverse">Inverse</button>
										  <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle"><span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										  </ul>
										</div><!-- /btn-group -->
									  </div>
                                       <!-- / button groups -->

                                       <h4>Buttons With Icons</h4>

                                       <div style="margin-top:10px;">
										<p>This is an example buttons with icons. About 140 icons are available.</p>
										<p>
											<button class="btn"><i class="icon-eye-open"></i> View</button>
											<button class="btn btn-inverse"><i class="icon-refresh icon-white"></i> Update</button>
											<button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button>
											<button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button>
										</p>
										<p>And there this is a toolbar icon example</p>
										<div class="btn-group">
											<button class="btn"><i class="icon-step-backward"></i></button>
											<button class="btn"><i class="icon-fast-backward"></i></button>
											<button class="btn"><i class="icon-backward"></i></button>
											<button class="btn"><i class="icon-play"></i></button>
											<button class="btn"><i class="icon-pause"></i></button>
											<button class="btn"><i class="icon-stop"></i></button>
											<button class="btn"><i class="icon-forward"></i></button>
											<button class="btn"><i class="icon-fast-forward"></i></button>
											<button class="btn"><i class="icon-step-forward"></i></button>
										</div>										
									</div>


                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>

                    <div class="row-fluid">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Icons Available</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                       <ul class="the-icons clearfix">
								            <li><i class="icon-glass"></i> icon-glass</li>
								            <li><i class="icon-music"></i> icon-music</li>
								            <li><i class="icon-search"></i> icon-search</li>
								            <li><i class="icon-envelope"></i> icon-envelope</li>
								            <li><i class="icon-heart"></i> icon-heart</li>
								            <li><i class="icon-star"></i> icon-star</li>
								            <li><i class="icon-star-empty"></i> icon-star-empty</li>
								            <li><i class="icon-user"></i> icon-user</li>
								            <li><i class="icon-film"></i> icon-film</li>
								            <li><i class="icon-th-large"></i> icon-th-large</li>
								            <li><i class="icon-th"></i> icon-th</li>
								            <li><i class="icon-th-list"></i> icon-th-list</li>
								            <li><i class="icon-ok"></i> icon-ok</li>
								            <li><i class="icon-remove"></i> icon-remove</li>
								            <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
								            <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
								            <li><i class="icon-off"></i> icon-off</li>
								            <li><i class="icon-signal"></i> icon-signal</li>
								            <li><i class="icon-cog"></i> icon-cog</li>
								            <li><i class="icon-trash"></i> icon-trash</li>
								            <li><i class="icon-home"></i> icon-home</li>
								            <li><i class="icon-file"></i> icon-file</li>
								            <li><i class="icon-time"></i> icon-time</li>
								            <li><i class="icon-road"></i> icon-road</li>
								            <li><i class="icon-download-alt"></i> icon-download-alt</li>
								            <li><i class="icon-download"></i> icon-download</li>
								            <li><i class="icon-upload"></i> icon-upload</li>
								            <li><i class="icon-inbox"></i> icon-inbox</li>

								            <li><i class="icon-play-circle"></i> icon-play-circle</li>
								            <li><i class="icon-repeat"></i> icon-repeat</li>
								            <li><i class="icon-refresh"></i> icon-refresh</li>
								            <li><i class="icon-list-alt"></i> icon-list-alt</li>
								            <li><i class="icon-lock"></i> icon-lock</li>
								            <li><i class="icon-flag"></i> icon-flag</li>
								            <li><i class="icon-headphones"></i> icon-headphones</li>
								            <li><i class="icon-volume-off"></i> icon-volume-off</li>
								            <li><i class="icon-volume-down"></i> icon-volume-down</li>
								            <li><i class="icon-volume-up"></i> icon-volume-up</li>
								            <li><i class="icon-qrcode"></i> icon-qrcode</li>
								            <li><i class="icon-barcode"></i> icon-barcode</li>
								            <li><i class="icon-tag"></i> icon-tag</li>
								            <li><i class="icon-tags"></i> icon-tags</li>
								            <li><i class="icon-book"></i> icon-book</li>
								            <li><i class="icon-bookmark"></i> icon-bookmark</li>
								            <li><i class="icon-print"></i> icon-print</li>
								            <li><i class="icon-camera"></i> icon-camera</li>
								            <li><i class="icon-font"></i> icon-font</li>
								            <li><i class="icon-bold"></i> icon-bold</li>
								            <li><i class="icon-italic"></i> icon-italic</li>
								            <li><i class="icon-text-height"></i> icon-text-height</li>
								            <li><i class="icon-text-width"></i> icon-text-width</li>
								            <li><i class="icon-align-left"></i> icon-align-left</li>
								            <li><i class="icon-align-center"></i> icon-align-center</li>
								            <li><i class="icon-align-right"></i> icon-align-right</li>
								            <li><i class="icon-align-justify"></i> icon-align-justify</li>
								            <li><i class="icon-list"></i> icon-list</li>

								            <li><i class="icon-indent-left"></i> icon-indent-left</li>
								            <li><i class="icon-indent-right"></i> icon-indent-right</li>
								            <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
								            <li><i class="icon-picture"></i> icon-picture</li>
								            <li><i class="icon-pencil"></i> icon-pencil</li>
								            <li><i class="icon-map-marker"></i> icon-map-marker</li>
								            <li><i class="icon-adjust"></i> icon-adjust</li>
								            <li><i class="icon-tint"></i> icon-tint</li>
								            <li><i class="icon-edit"></i> icon-edit</li>
								            <li><i class="icon-share"></i> icon-share</li>
								            <li><i class="icon-check"></i> icon-check</li>
								            <li><i class="icon-move"></i> icon-move</li>
								            <li><i class="icon-step-backward"></i> icon-step-backward</li>
								            <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
								            <li><i class="icon-backward"></i> icon-backward</li>
								            <li><i class="icon-play"></i> icon-play</li>
								            <li><i class="icon-pause"></i> icon-pause</li>
								            <li><i class="icon-stop"></i> icon-stop</li>
								            <li><i class="icon-forward"></i> icon-forward</li>
								            <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
								            <li><i class="icon-step-forward"></i> icon-step-forward</li>
								            <li><i class="icon-eject"></i> icon-eject</li>
								            <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
								            <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
								            <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
								            <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
								            <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
								            <li><i class="icon-ok-sign"></i> icon-ok-sign</li>

								            <li><i class="icon-question-sign"></i> icon-question-sign</li>
								            <li><i class="icon-info-sign"></i> icon-info-sign</li>
								            <li><i class="icon-screenshot"></i> icon-screenshot</li>
								            <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
								            <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
								            <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
								            <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
								            <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
								            <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
								            <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
								            <li><i class="icon-share-alt"></i> icon-share-alt</li>
								            <li><i class="icon-resize-full"></i> icon-resize-full</li>
								            <li><i class="icon-resize-small"></i> icon-resize-small</li>
								            <li><i class="icon-plus"></i> icon-plus</li>
								            <li><i class="icon-minus"></i> icon-minus</li>
								            <li><i class="icon-asterisk"></i> icon-asterisk</li>
								            <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
								            <li><i class="icon-gift"></i> icon-gift</li>
								            <li><i class="icon-leaf"></i> icon-leaf</li>
								            <li><i class="icon-fire"></i> icon-fire</li>
								            <li><i class="icon-eye-open"></i> icon-eye-open</li>
								            <li><i class="icon-eye-close"></i> icon-eye-close</li>
								            <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
								            <li><i class="icon-plane"></i> icon-plane</li>
								            <li><i class="icon-calendar"></i> icon-calendar</li>
								            <li><i class="icon-random"></i> icon-random</li>
								            <li><i class="icon-comment"></i> icon-comment</li>
								            <li><i class="icon-magnet"></i> icon-magnet</li>

								            <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
								            <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
								            <li><i class="icon-retweet"></i> icon-retweet</li>
								            <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
								            <li><i class="icon-folder-close"></i> icon-folder-close</li>
								            <li><i class="icon-folder-open"></i> icon-folder-open</li>
								            <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
								            <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
								            <li><i class="icon-hdd"></i> icon-hdd</li>
								            <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
								            <li><i class="icon-bell"></i> icon-bell</li>
								            <li><i class="icon-certificate"></i> icon-certificate</li>
								            <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
								            <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
								            <li><i class="icon-hand-right"></i> icon-hand-right</li>
								            <li><i class="icon-hand-left"></i> icon-hand-left</li>
								            <li><i class="icon-hand-up"></i> icon-hand-up</li>
								            <li><i class="icon-hand-down"></i> icon-hand-down</li>
								            <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
								            <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
								            <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
								            <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
								            <li><i class="icon-globe"></i> icon-globe</li>
								            <li><i class="icon-wrench"></i> icon-wrench</li>
								            <li><i class="icon-tasks"></i> icon-tasks</li>
								            <li><i class="icon-filter"></i> icon-filter</li>
								            <li><i class="icon-briefcase"></i> icon-briefcase</li>
								            <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
								          </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Basic Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>Mark</td>
						                  <td>Otto</td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>2</td>
						                  <td>Jacob</td>
						                  <td>Thornton</td>
						                  <td>@fat</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>Larry</td>
						                  <td>the Bird</td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Striped Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>Mark</td>
						                  <td>Otto</td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>2</td>
						                  <td>Jacob</td>
						                  <td>Thornton</td>
						                  <td>@fat</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>Larry</td>
						                  <td>the Bird</td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Bordered Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>Mark</td>
						                  <td>Otto</td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>2</td>
						                  <td>Jacob</td>
						                  <td>Thornton</td>
						                  <td>@fat</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>Larry</td>
						                  <td>the Bird</td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Hover Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-hover">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>Mark</td>
						                  <td>Otto</td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>2</td>
						                  <td>Jacob</td>
						                  <td>Thornton</td>
						                  <td>@fat</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>Larry</td>
						                  <td>the Bird</td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Condensed Table</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-condensed">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>Mark</td>
						                  <td>Otto</td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>2</td>
						                  <td>Jacob</td>
						                  <td>Thornton</td>
						                  <td>@fat</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>Larry</td>
						                  <td>the Bird</td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Table with row classes</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>First Name</th>
						                  <th>Last Name</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr class="success">
						                  <td>1</td>
						                  <td>Mark</td>
						                  <td>Otto</td>
						                  <td>@mdo</td>
						                </tr>
						                <tr class="error">
						                  <td>2</td>
						                  <td>Jacob</td>
						                  <td>Thornton</td>
						                  <td>@fat</td>
						                </tr>
						                <tr class="info">
						                  <td>3</td>
						                  <td>Larry</td>
						                  <td>the Bird</td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Bootstrap dataTables</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Rendering engine</th>
												<th>Browser</th>
												<th>Platform(s)</th>
												<th>Engine version</th>
												<th>CSS grade</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td>Trident</td>
												<td>Internet
													 Explorer 4.0</td>
												<td>Win 95+</td>
												<td class="center"> 4</td>
												<td class="center">X</td>
											</tr>
											<tr class="even gradeC">
												<td>Trident</td>
												<td>Internet
													 Explorer 5.0</td>
												<td>Win 95+</td>
												<td class="center">5</td>
												<td class="center">C</td>
											</tr>
											<tr class="odd gradeA">
												<td>Trident</td>
												<td>Internet
													 Explorer 5.5</td>
												<td>Win 95+</td>
												<td class="center">5.5</td>
												<td class="center">A</td>
											</tr>
											<tr class="even gradeA">
												<td>Trident</td>
												<td>Internet
													 Explorer 6</td>
												<td>Win 98+</td>
												<td class="center">6</td>
												<td class="center">A</td>
											</tr>
											<tr class="odd gradeA">
												<td>Trident</td>
												<td>Internet Explorer 7</td>
												<td>Win XP SP2+</td>
												<td class="center">7</td>
												<td class="center">A</td>
											</tr>
											<tr class="even gradeA">
												<td>Trident</td>
												<td>AOL browser (AOL desktop)</td>
												<td>Win XP</td>
												<td class="center">6</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 1.0</td>
												<td>Win 98+ / OSX.2+</td>
												<td class="center">1.7</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 1.5</td>
												<td>Win 98+ / OSX.2+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 2.0</td>
												<td>Win 98+ / OSX.2+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 3.0</td>
												<td>Win 2k+ / OSX.3+</td>
												<td class="center">1.9</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Camino 1.0</td>
												<td>OSX.2+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Camino 1.5</td>
												<td>OSX.3+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Netscape 7.2</td>
												<td>Win 95+ / Mac OS 8.6-9.2</td>
												<td class="center">1.7</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Netscape Browser 8</td>
												<td>Win 98SE+</td>
												<td class="center">1.7</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Netscape Navigator 9</td>
												<td>Win 98+ / OSX.2+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.0</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.1</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1.1</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.2</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1.2</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.3</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1.3</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.4</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1.4</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.5</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1.5</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.6</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">1.6</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.7</td>
												<td>Win 98+ / OSX.1+</td>
												<td class="center">1.7</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.8</td>
												<td>Win 98+ / OSX.1+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Seamonkey 1.1</td>
												<td>Win 98+ / OSX.2+</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Epiphany 2.20</td>
												<td>Gnome</td>
												<td class="center">1.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 1.2</td>
												<td>OSX.3</td>
												<td class="center">125.5</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 1.3</td>
												<td>OSX.3</td>
												<td class="center">312.8</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 2.0</td>
												<td>OSX.4+</td>
												<td class="center">419.3</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 3.0</td>
												<td>OSX.4+</td>
												<td class="center">522.1</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>OmniWeb 5.5</td>
												<td>OSX.4+</td>
												<td class="center">420</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>iPod Touch / iPhone</td>
												<td>iPod</td>
												<td class="center">420.1</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>S60</td>
												<td>S60</td>
												<td class="center">413</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 7.0</td>
												<td>Win 95+ / OSX.1+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 7.5</td>
												<td>Win 95+ / OSX.2+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 8.0</td>
												<td>Win 95+ / OSX.2+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 8.5</td>
												<td>Win 95+ / OSX.2+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 9.0</td>
												<td>Win 95+ / OSX.3+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 9.2</td>
												<td>Win 88+ / OSX.3+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 9.5</td>
												<td>Win 88+ / OSX.3+</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera for Wii</td>
												<td>Wii</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Nokia N800</td>
												<td>N800</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Nintendo DS browser</td>
												<td>Nintendo DS</td>
												<td class="center">8.5</td>
												<td class="center">C/A<sup>1</sup></td>
											</tr>
											<tr class="gradeC">
												<td>KHTML</td>
												<td>Konqureror 3.1</td>
												<td>KDE 3.1</td>
												<td class="center">3.1</td>
												<td class="center">C</td>
											</tr>
											<tr class="gradeA">
												<td>KHTML</td>
												<td>Konqureror 3.3</td>
												<td>KDE 3.3</td>
												<td class="center">3.3</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeA">
												<td>KHTML</td>
												<td>Konqureror 3.5</td>
												<td>KDE 3.5</td>
												<td class="center">3.5</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeX">
												<td>Tasman</td>
												<td>Internet Explorer 4.5</td>
												<td>Mac OS 8-9</td>
												<td class="center">-</td>
												<td class="center">X</td>
											</tr>
											<tr class="gradeC">
												<td>Tasman</td>
												<td>Internet Explorer 5.1</td>
												<td>Mac OS 7.6-9</td>
												<td class="center">1</td>
												<td class="center">C</td>
											</tr>
											<tr class="gradeC">
												<td>Tasman</td>
												<td>Internet Explorer 5.2</td>
												<td>Mac OS 8-X</td>
												<td class="center">1</td>
												<td class="center">C</td>
											</tr>
											<tr class="gradeA">
												<td>Misc</td>
												<td>NetFront 3.1</td>
												<td>Embedded devices</td>
												<td class="center">-</td>
												<td class="center">C</td>
											</tr>
											<tr class="gradeA">
												<td>Misc</td>
												<td>NetFront 3.4</td>
												<td>Embedded devices</td>
												<td class="center">-</td>
												<td class="center">A</td>
											</tr>
											<tr class="gradeX">
												<td>Misc</td>
												<td>Dillo 0.8</td>
												<td>Embedded devices</td>
												<td class="center">-</td>
												<td class="center">X</td>
											</tr>
											<tr class="gradeX">
												<td>Misc</td>
												<td>Links</td>
												<td>Text only</td>
												<td class="center">-</td>
												<td class="center">X</td>
											</tr>
											<tr class="gradeX">
												<td>Misc</td>
												<td>Lynx</td>
												<td>Text only</td>
												<td class="center">-</td>
												<td class="center">X</td>
											</tr>
											<tr class="gradeC">
												<td>Misc</td>
												<td>IE Mobile</td>
												<td>Windows Mobile 6</td>
												<td class="center">-</td>
												<td class="center">C</td>
											</tr>
											<tr class="gradeC">
												<td>Misc</td>
												<td>PSP browser</td>
												<td>PSP</td>
												<td class="center">-</td>
												<td class="center">C</td>
											</tr>
											<tr class="gradeU">
												<td>Other browsers</td>
												<td>All others</td>
												<td>-</td>
												<td class="center">-</td>
												<td class="center">U</td>
											</tr>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Bootstrap dataTables with Toolbar</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="#"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet
                                                     Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center"> 4</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>Trident</td>
                                                <td>Internet
                                                     Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">5</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet
                                                     Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>Internet
                                                     Explorer 6</td>
                                                <td>Win 98+</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td class="center">7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td class="center">1.9</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape Browser 8</td>
                                                <td>Win 98SE+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape Navigator 9</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.1</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.2</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.2</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.3</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.4</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.4</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.5</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td class="center">125.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td class="center">312.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">419.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">522.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td class="center">420</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td class="center">420.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td class="center">413</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td class="center">8.5</td>
                                                <td class="center">C/A<sup>1</sup></td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td class="center">3.1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td class="center">3.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td class="center">3.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td class="center">-</td>
                                                <td class="center">U</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

					<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Example</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal">
                                      <fieldset>
                                        <legend>Form Horizontal</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="focusedInput">Focused input</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused...">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label">Uneditable input</label>
                                          <div class="controls">
                                            <span class="input-xlarge uneditable-input">Some value here</span>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Disabled input</label>
                                          <div class="controls">
                                            <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
                                          <div class="controls">
                                            <label>
                                              <input type="checkbox" id="optionsCheckbox2" value="option1" disabled="">
                                              This is a disabled checkbox
                                            </label>
                                          </div>
                                        </div>
                                        <div class="control-group warning">
                                          <label class="control-label" for="inputError">Input with warning</label>
                                          <div class="controls">
                                            <input type="text" id="inputError">
                                            <span class="help-inline">Something may have gone wrong</span>
                                          </div>
                                        </div>
                                        <div class="control-group error">
                                          <label class="control-label" for="inputError">Input with error</label>
                                          <div class="controls">
                                            <input type="text" id="inputError">
                                            <span class="help-inline">Please correct the error</span>
                                          </div>
                                        </div>
                                        <div class="control-group success">
                                          <label class="control-label" for="inputError">Input with success</label>
                                          <div class="controls">
                                            <input type="text" id="inputError">
                                            <span class="help-inline">Woohoo!</span>
                                          </div>
                                        </div>
                                        <div class="control-group success">
                                          <label class="control-label" for="selectError">Select with success</label>
                                          <div class="controls">
                                            <select id="selectError">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                            <span class="help-inline">Woohoo!</span>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Example</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal">
                                      <fieldset>
                                        <legend>Form Components</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Text input </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="date01">Date input</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
                                            <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="optionsCheckbox">Checkbox</label>
                                          <div class="controls">
                                            <label class="uniform">
                                              <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                              Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Select list</label>
                                          <div class="controls">
                                            <select id="select01" class="chzn-select">
                                              <option>something</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="multiSelect">Multicon-select</label>
                                          <div class="controls">
                                            <select multiple="multiple" id="multiSelect" class="chzn-select span4">
                                              <option>Alabama</option><option>Alaska</option><option>Arizona</option><option>Arkansas</option><option>California</option><option>Colorado</option><option>Connecticut</option><option>Delaware</option><option>District Of Columbia</option><option>Florida</option><option>Georgia</option><option>Hawaii</option><option>Idaho</option><option>Illinois</option><option>Indiana</option><option>Iowa</option><option>Kansas</option><option>Kentucky</option><option>Louisiana</option><option>Maine</option><option>Maryland</option><option>Massachusetts</option><option>Michigan</option><option>Minnesota</option><option>Mississippi</option><option>Missouri</option><option>Montana</option><option>Nebraska</option><option>Nevada</option><option>New Hampshire</option><option>New Jersey</option><option>New Mexico</option><option>New York</option><option>North Carolina</option><option>North Dakota</option><option>Ohio</option><option>Oklahoma</option><option>Oregon</option><option>Pennsylvania</option><option>Rhode Island</option><option>South Carolina</option><option>South Dakota</option><option>Tennessee</option><option>Texas</option><option>Utah</option><option>Vermont</option><option>Virginia</option><option>Washington</option><option>West Virginia</option><option>Wisconsin</option><option>Wyoming</option>
                                            </select>
                                            <p class="help-block">Start typing to activate auto complete!</p>
                                          </div>

                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">File input</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

					<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Alerts</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Warning!</strong> This is a warning message.
									</div>
									<div class="alert alert-success">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Success!</strong> This is a success message.
									</div>
									<div class="alert alert-info">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Info!</strong> This is an information message.
									</div>
									<div class="alert alert-error">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> This is an error message.
									</div>
									<h4>Block Alerts</h4>
									<div class="alert alert-block">
										<a class="close" data-dismiss="alert" href="#">&times;</a>
										<h4 class="alert-heading">Warning!</h4>
										Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
									</div>
									<div class="alert alert-success alert-block">
										<a class="close" data-dismiss="alert" href="#">&times;</a>
										<h4 class="alert-heading">Success!</h4>
										Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
									</div>
									<div class="alert alert-info alert-block">
										<a class="close" data-dismiss="alert" href="#">&times;</a>
										<h4 class="alert-heading">Info!</h4>
										Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
									</div>
									<div class="alert alert-error alert-block">
										<a class="close" data-dismiss="alert" href="#">&times;</a>
										<h4 class="alert-heading">Error!</h4>
										Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
									</div>

								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Progress Bars</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
										<h4>Basic progress bars</h4>
										<div class="progress">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-success">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-warning">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-danger">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<h4>Striped progress bars</h4>
										<div class="alert">
											Internet Explorer doesn't support striped progress bars!
										</div>
										<div class="progress progress-striped">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-striped progress-success">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-striped progress-warning">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-striped progress-danger">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<h4>Animated progress bars</h4>										
										<div class="alert">
											Internet Explorer doesn't support animated progress bars!
										</div>
										<div class="progress progress-striped active">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-striped progress-success active">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-striped progress-warning active">
											<div style="width: 60%;" class="bar"></div>
										</div>
										<div class="progress progress-striped progress-danger active">
											<div style="width: 60%;" class="bar"></div>
										</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Labels & Badges</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">

										<h4>Available labels</h4>
										<table class="table table-bordered table-striped">
											<thead>
											  <tr>
												<th>Labels</th>
												<th>Markup</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>
												  <span class="label">Default</span>
												</td>
												<td>
												  <code>&lt;span class="label"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  <span class="label label-success">Success</span>
												</td>
												<td>
												  <code>&lt;span class="label label-success"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  <span class="label label-warning">Warning</span>
												</td>
												<td>
												  <code>&lt;span class="label label-warning"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  <span class="label label-important">Important</span>
												</td>
												<td>
												  <code>&lt;span class="label label-important"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  <span class="label label-info">Info</span>
												</td>
												<td>
												  <code>&lt;span class="label label-info"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  <span class="label label-inverse">Inverse</span>
												</td>
												<td>
												  <code>&lt;span class="label label-inverse"&gt;</code>
												</td>
											  </tr>
											</tbody>
										  </table>
											<h4>Available badges</h4>
											<table class="table table-bordered table-striped">
											<thead>
											  <tr>
												<th>Name</th>
												<th>Example</th>
												<th>Markup</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>
												  Default
												</td>
												<td>
												  <span class="badge">1</span>
												</td>
												<td>
												  <code>&lt;span class="badge"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  Success
												</td>
												<td>
												  <span class="badge badge-success">2</span>
												</td>
												<td>
												  <code>&lt;span class="badge badge-success"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  Warning
												</td>
												<td>
												  <span class="badge badge-warning">4</span>
												</td>
												<td>
												  <code>&lt;span class="badge badge-warning"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  Important
												</td>
												<td>
												  <span class="badge badge-important">6</span>
												</td>
												<td>
												  <code>&lt;span class="badge badge-important"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  Info
												</td>
												<td>
												  <span class="badge badge-info">8</span>
												</td>
												<td>
												  <code>&lt;span class="badge badge-info"&gt;</code>
												</td>
											  </tr>
											  <tr>
												<td>
												  Inverse
												</td>
												<td>
												  <span class="badge badge-inverse">10</span>
												</td>
												<td>
												  <code>&lt;span class="badge badge-inverse"&gt;</code>
												</td>
											  </tr>
											</tbody>
										  </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Tooltips, Popovers & Pagination</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                    	<h4></h4>
	                                	<div style="padding:50px;">
	                                		<button class="btn tooltip-top" data-original-title="Tooltip in top">Top</button>
											<button class="btn tooltip-left" data-original-title="Tooltip in left">Left</button>
											<button class="btn tooltip-right" data-original-title="Tooltip in right">Right</button>
											<button class="btn tooltip-bottom" data-original-title="Tooltip in bottom">Bottom</button>
	                                	</div>

	                                	<div style="padding-left:50%;">
	                                		<button class="btn popover-top" data-original-title="Popover in top">Top</button>
											<button class="btn popover-left" data-original-title="Popover in left">Left</button>
	                                	</div>

	                                	<div style="padding-left:20%;">
	                                		<button class="btn popover-right" data-original-title="Popover in right">Right</button>
											<button class="btn popover-bottom" data-original-title="Popover in bottom">Bottom</button>
	                                	</div>

	                                	<div class="pagination">
											<ul>
												<li><a href="#">Prev</a></li>
												<li class="active">
													<a href="#">1</a>
												</li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>

										<div class="pagination pagination-small">
											<ul>
												<li class="disabled"><a href="#">Prev</a></li>
												<li class="active">
													<a href="#">1</a>
												</li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>

										<div class="pagination pagination-mini">
											<ul>
												<li class="disabled"><a href="#">Prev</a></li>
												<li class="active">
													<a href="#">1</a>
												</li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">Next</a></li>
											</ul>
										</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Modals & Notifications</div>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
										<a href="#myModal" data-toggle="modal" class="btn btn-primary">Modal dialog</a>
										<a href="#myAlert" data-toggle="modal" class="btn btn-danger">Alert</a>
										
										<div id="myModal" class="modal hide">
											<div class="modal-header">
												<button data-dismiss="modal" class="close" type="button">&times;</button>
												<h3>Modal header</h3>
											</div>
											<div class="modal-body">
												<p>Modal Example Body</p>
											</div>
										</div>
										<div id="myAlert" class="modal hide">
											<div class="modal-header">
												<button data-dismiss="modal" class="close" type="button">&times;</button>
												<h3>Alert modal</h3>
											</div>
											<div class="modal-body">
												<p>Lorem ipsum dolor sit amet...</p>
											</div>
											<div class="modal-footer">
												<a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a>
												<a data-dismiss="modal" class="btn" href="#">Cancel</a>
											</div>
										</div>

										<div style="margin-top: 20px;">
											<button class="btn notification" id="notification">Notification</button><br />
											<button class="btn notification" id="notification-sticky">Sticky Notification</button><br />
											<button class="btn notification" id="notification-header">Notification With Header</button>
										</div>

                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
@endsection