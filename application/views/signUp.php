

<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="<?php echo base_url();?>authentication">
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="abc@gmail.com" name="email" id="email">
                        </div>
						<div class="input-group">
                            <input class="input--style-2" type="text" placeholder="password" name="password" id="password">
                        </div>
						<div class="input-group">
							<input class="input--style-2" type="text" placeholder="confirm Password" name="Confirm_password" id="confirm_password">
						</div>
<!--                        <div class="row row-space">-->
<!--                            <div class="col-2">-->
<!--                                <div class="input-group">-->
<!--                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="birthday"id="date">-->
<!--                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-2">-->
<!--                                <div class="input-group">-->
<!--                                    <div class="rs-select2 js-select-simple select--no-search">-->
<!--                                        <select name="gender">-->
<!--                                            <option disabled="disabled" selected="selected">Gender</option>-->
<!--                                            <option>Male</option>-->
<!--                                            <option>Female</option>-->
<!--                                            <option>Other</option>-->
<!--                                        </select>-->
<!--                                        <div class="select-dropdown"></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="input-group">-->
<!--                            <div class="rs-select2 js-select-simple select--no-search">-->
<!--                                <select name="class">-->
<!--                                    <option disabled="disabled" selected="selected">Type</option>-->
<!--                                    <option>Photographer</option>-->
<!--                                    <option>User</option>-->
<!--                                    <option>Admin</option>-->
<!--                                </select>-->
<!--                                <div class="select-dropdown"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="row row-space">-->
<!--                            <div class="col-2">-->
<!--                                <div class="input-group">-->
<!--                                    <input class="input--style-2" type="text" placeholder="Registration Code" name="res_code">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<!-- end document-->
