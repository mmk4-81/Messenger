<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="file profile-file">
                            <img src="{{ asset(auth()->user()->avatar) }}" alt="Upload" class="img-fluid profile-image-preview">
                            <label for="select_file"><i class="fal fa-camera-alt"></i></label>
                            <input id="select_file" type="file" hidden />
                        </div>
                        <p>ویرایش اطلاعات</p>
                        <input type="text" placeholder="نام" value="{{auth()->user()->name}} " name="name" />
                        <input type="text" placeholder="نام کاربری" value="{{ auth()->user()->user_name }}" name="user_id" />
                        <input type="email" placeholder="ایمیل " value="{{ auth()->user()->email }}" name="email"/>
                        <p>تغییر پسورد </p>
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="password" placeholder=" پسورد قدیمی" />
                            </div>
                            <div class="col-xl-6">
                                <input type="password" placeholder=" پسورد جدید" />
                            </div>
                            <div class="col-xl-12">
                                <input type="password" placeholder=" تایید پسورد" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">
                        لغو
                    </button>
                    <button type="button" class="btn btn-primary save">
                        ذخیره تغییرات
                    </button>
                </div>
            </div>
        </div>
    </div>
