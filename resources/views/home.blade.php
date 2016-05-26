@extends('layouts.app')

@section('content')
 <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                           <div class="heading-section">
                                
                                <div class='form-group form-group-sm'>
                                    <form>
                                        <div class='col-xs-12'>
                                            <textarea  class='form-control' name='post'  placeholder="add new post"></textarea>
                                            <hr>
                                            <input  class='col-xs-2 pull-right btn btn-sm btn-primary' type='submit' name='Add' />
                                        </div>

                                    </form>
                                     <hr>
                                </div>
                            </div>

                            <!-- <div class='form-group form-group-sm'>
                                <div class='col-xs-offset-2 col-xs-4'>
                                    <input type='submit' name='loginbtn' class='btn btn-primary input-xs' value='Publish'/>
                                </div>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                        

                            <div class="blog-post">

                                <img src="images/1.png" alt="" id="profile"/>
                                <span> <a href="#"> Username</a> </span>
                                <hr/>
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                                <div class="blog-thumb">
                                <img src="images/blogpost1.jpg" alt="" />
                                </div>

                                <a href="#" > Up </a>
                                <a href="#" > Comment </a>
                                <input type="text"  name='comment'  placeholder="add new comment"/>

                                
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-12">
                        

                            <div class="blog-post">

                                <img src="images/1.png" alt="" id="profile"/>
                                <span> <a href="#"> Username</a> </span>
                                <hr/>
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                                <div class="blog-thumb">
                                <img src="images/blogpost2.jpg" alt="" />
                                </div>

                                <a href="#" > Up </a>
                                <a href="#" > Comment </a>
                                <input type="text"  name='comment'  placeholder="add new comment"/>

                                
                            </div>
                        </div>
                      
                        <div class="col-md-4 col-sm-6">                           
                            <div class="blog-post" id="sub">
                            
                               <div id="uname">
                                   <img src="images/1.png" alt="" id="profile"/>
                                    <span > <a href="#"> Username</a> </span>
                                    <span id="follow"> <a href="#"> Follow </a> </span>
                               </div>
                               <div id="uname">
                                   <img src="images/1.png" alt="" id="profile"/>
                                    <span > <a href="#"> Username</a> </span>
                                    <span id="follow"> <a href="#"> Follow </a> </span>
                               </div>
                               <div id= "add"> <h3> People you may know ?  </h3></div>
                               <div id= "ad"> <h3> Advertisments </h3>  </h3>
                                <div class="blog-thumb">
                                <img src="images/blogpost4.jpg" alt="" />
                                </div>
                               </div>
                                
                                </div>
                        </div>
                        </div>
                      
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                
                             </div>
                        </div>


            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
