<link rel="stylesheet" href="dist/css/dropzone.css">
<link rel="stylesheet" href="dist/css/style.css">
 <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Patient Profile</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="patients.php">Patients</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center"> 
                                            <img src="img/user.jpg" class="rounded-circle" width="150" />
                                            <h4 class="card-title mt-10" id="uname">John Doe</h4>
                                            <p class="card-subtitle" id="ucity">Front End Developer</p>
                                            <div class="row text-center justify-content-md-center">
                                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-user"></i> <font class="font-medium" id="uage">254</font></a></div>
                                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-image"></i> <font class="font-medium" id="ugender">54</font></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-0"> 
                                    <div class="card-body"> 
                                        <small class="text-muted d-block">Email address </small>
                                        <h6 id="uemailId">johndoe@admin.com</h6> 
                                        <small class="text-muted d-block pt-10">Phone</small>
                                        <h6 id="uphone">(123) 456 7890</h6> 
                                        <small class="text-muted d-block pt-10">Address</small>
                                        <h6 id="uadd">71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                        <div class="map-box">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <button class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></button>
                                                </div>
                                                <div class="col-md-6">
                                                <button class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></button>
                                                </div>
                                            
                                       
                                     
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <button class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></button>
                                                </div>
                                                <div class="col-md-6">
                                                <button class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></button>
                                                </div>
                                            
                                       
                                     
                                            </div>
                                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                        </div> 
                                        <small class="text-muted d-block pt-30">Social Profile</small>
                                        <br/>
                                        <button class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></button>
                                        <button class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></button>
                                        <button class="btn btn-icon btn-instagram"><i class="fab fa-instagram"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#upload_doc" role="tab" aria-controls="pills-profile" aria-selected="false">Upload Documnets</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-setting" aria-selected="false">Upload Documents</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-setting" aria-selected="false"></a>
                                        </li> -->
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <!-- <div class="tab-pane fade " id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                            <div class="card-body">
                                                <div class="profiletimeline mt-0">
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="img/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                                <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="img/big/img2.jpg" class="img-fluid rounded" /></div>
                                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="img/big/img3.jpg" class="img-fluid rounded" /></div>
                                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="img/big/img4.jpg" class="img-fluid rounded" /></div>
                                                                    <div class="col-lg-3 col-md-6 mb-20"><img src="img/big/img5.jpg" class="img-fluid rounded" /></div>
                                                                </div>
                                                                <div class="like-comm"> 
                                                                    <a href="javascript:void(0)" class="link mr-10">2 comment</a> 
                                                                    <a href="javascript:void(0)" class="link mr-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="img/users/2.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                                <div class="mt-20 row">
                                                                    <div class="col-md-3 col-xs-12"><img src="img/big/img6.jpg" alt="user" class="img-fluid rounded" /></div>
                                                                    <div class="col-md-9 col-xs-12">
                                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a>
                                                                    </div>
                                                                </div>
                                                                <div class="like-comm mt-20"> 
                                                                    <a href="javascript:void(0)" class="link mr-10">2 comment</a> 
                                                                    <a href="javascript:void(0)" class="link mr-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="img/users/3.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div>
                                                                <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                                <p class="mt-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                            </div>
                                                            <div class="like-comm mt-20"> 
                                                                <a href="javascript:void(0)" class="link mr-10">2 comment</a> 
                                                                <a href="javascript:void(0)" class="link mr-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="sl-item">
                                                        <div class="sl-left"> <img src="img/users/4.jpg" alt="user" class="rounded-circle" /> </div>
                                                        <div class="sl-right">
                                                            <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                                <blockquote class="mt-10">
                                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                                <div class="row">
                                                    
                                                </div>
                                                <div class="profiletimeline mt-0">
                            <div class="card-header">
                                <h3>Upload an Documents</h3></div>
                            <div class="card-body">
                                <form action="apis/upload.php" class="dropzone" id="myAwesomeDropzone">
                                    <input type="hidden" id="claimId" name="claimId" />
                                </form>
                            </div>
                            <hr>

                        </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                            <div class="card-body">
                                                
                                                <form class="form-horizontal">
                                                  <h5>Basic Details</h5>
                                                    <hr>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="fname">First Name</label>
                                                        <input type="text" placeholder="Johnathan" class="form-control" name="fname" id="fname">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="mname">Middle Name</label>
                                                        <input type="text" placeholder="Kemya" class="form-control" name="mname" id="mname">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lname">Last Name</label>
                                                        <input type="text" placeholder="Doe" class="form-control" name="lname" id="lname">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="mobile1">Contact Number</label>
                                                        <input type="text" placeholder="9112458963" class="form-control" name="mobile1" id="mobile1">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="emailId">Email</label>
                                                        <input type="email" placeholder="johnathan@admin.com" class="form-control" name="emailId" id="emailId">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="landline">Landline</label>
                                                        <input type="text" placeholder="123 456 7890" class="form-control" name="landline" id="landline">
                                                    </div>
                                                    </div>
                                                </div>
                                                <h5>Marriage Details</h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="mstatus">Marital Status</label>
                                                        <select name="mstatus" id="mstatus" class="form-control">
                                                            <option value="1">Single</option>
                                                            <option value="2">Married</option>
                                                            <option value="3">Divorced</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="gender">Gender</label>
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="bdate">Birth Date</label>
                                                        <input type="text" placeholder="123 456 7890" class="form-control" name="bdate" id="bdate">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="height">Height (in cm)</label>
                                                        <input type="text" placeholder="165" class="form-control" name="height" id="height">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="weight">Weight (in KG)</label>
                                                        <input type="text" placeholder="65" class="form-control" name="weight" id="weight">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="occupation">Occupation</label>
                                                        <input type="text" placeholder="Enginner" class="form-control" name="occupation" id="occupation">
                                                    </div>
                                                    </div>
                                                </div>
                                                    
                                                <h5>Marriage Details</h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="refferedId">Reffered By</label>
                                                        <select name="refferedId" id="refferedId" class="form-control">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="ecostrata">Economic Strata</label>
                                                        <select name="ecostrata" id="ecostrata" class="form-control">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="occupation">Occupation</label>
                                                        <input type="text" placeholder="Enginner" class="form-control" name="occupation" id="occupation">
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <textarea name="address" name="address" rows="3" class="form-control"></textarea>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" placeholder="Pune" class="form-control" name="city" id="city">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="pincode">Pin code</label>
                                                        <input type="text" placeholder="411005" class="form-control" name="pincode" id="pincode">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="religin">Religion</label>
                                                        <select name="religin" id="religin" class="form-control">
                                                            <option value="1">Hindu</option>
                                                            <option value="2">Muslim</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                <h5>Appointment Details</h5>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="appDoctor">Appointment For</label>
                                                        <select name="appDoctor" id="appDoctor" class="form-control">
                                                            <option value="1">Hindu</option>
                                                            <option value="2">Muslim</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="cdate">Consulting Date</label>
                                                        <input type="text" placeholder="Pune" class="form-control" name="cdate" id="cdate">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="fvisitdate">First Visit Date</label>
                                                        <input type="text"  class="form-control" name="fvisitdate" id="fvisitdate">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lvisitdate">Last Visit Date</label>
                                                        <input type="text" placeholder="Pune" class="form-control" name="lvisitdate" id="lvisitdate">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                   
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                        <label for="remarks">Remark</label>
                                                        <textarea  name="remarks"id="remarks" rows="3" class="form-control"></textarea>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <script src="jscode/patient_profile.js"></script>
                <script type="text/javascript" src="js/dropzone.js"></script>
                <script type="text/javascript" src="jscode/dropzoneProduct.js"></script>