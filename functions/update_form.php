        <div class="justify-content-center">
            <form  action="routes.php" method="post" enctype="multipart/form-data">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-info active">
                    <input type="radio" name="options" value=" ေရာင်းမည်" id="option1" autocomplete="off" checked> ေရာင်းမည်
                  </label>
                  <label class="btn btn-outline-info">
                    <input type="radio" name="options" value="ငှားမည်" id="option2" autocomplete="off"> ငှားမည်
                  </label>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label for="name">နေရပ်လိပ်စာ:</label>
                      <input type="text" class="form-control" id="name" required="required" name="address" value="<?php echo $address[0]; ?>">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <label for="city"> မြို့နယ် :</label>
                          <select class="custom-select" id="city" name="city">
                            <option selected><?php echo $address[1]; ?></option>
                            <option value="ချမ်းမြသာစည်">ချမ်းမြသာစည်</option>
                            <option value="ပြည်ကြီးတံခွန်">ပြည်ကြီးတံခွန်</option>
                            <option value="အောင်မြေသာစံ">အောင်မြေသာစံ</option>
                            <option value="ချမ်းအေးသာစံ">ချမ်းအေးသာစံ</option>
                            <option value="မဟာအောင်မြေ">မဟာအောင်မြေ</option>
                          </select>
                      </div>
                  </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="email">မြေနေရာအကျယ်အဝန်း:</label>
                    <input type="text" class="form-control" placeholder="eg- 40x60" id="email"  required="required" name="wideofground" value="<?php echo $data['wide_of_ground']; ?>">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label for="groundtype"> မြေအမျိုးအစား:</label>
                      <select class="custom-select" id="groundtype" name="groundtype" required="required">
                        <option selected><?php echo $data['type_of_ground']; ?></option>
                        <option value="ဘိုးဘွားပိုင်မြေ">ဘိုးဘွားပိုင်မြေ</option>
                        <option value="စလစ်မြေ">စလစ်မြေ</option>
                        <option value="စလစ်မြေ">ဂရမ်ပေါက်မြေ</option>
                      </select>
                  </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" id="building" class="btn btn-outline-info">အဆောက်အဦးပါ</button>
                  <button type="button" id="no_building" class="btn btn-outline-info">အဆောက်အဦးမပါ</button>
                </div>
                <div class="row mt-2" id="building_info">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                    <label for="email">အဆောက်အဦးအကျယ်အဝန်း:</label>
                    <input type="text" class="form-control" placeholder="eg- 40x40" id="email"   name="wideofbuilding" value="<?php echo $data['wide_of_building']; ?>">
                  </div>
                  <div class="form-group col-lg-4 col-md-4 col-sm-4">
                        <label for="buildingtype"> အဆောက်အဦးအမျိုးအစား:</label>
                        <select class="custom-select" id="buildingtype" name="buildingtype" required="required">
                          <option selected><?php echo $building[0]; ?></option>
                          <option value="RC">RC</option>
                          <option value="နံကပ်">နံကပ်</option>
                          <option value="လုံးချင်းအိမ်">လုံးချင်းအိမ်</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2 col-sm-2">
                        <label for="stepofbuilding"> အထပ်:</label>
                        <select class="custom-select" id="stepofbuilding" name="buildingsteps">
                          <option selected><?php echo $building[1]; ?></option>
                          <option value="၁">၁</option>
                          <option value="၂">၂</option>
                          <option value="၃">၃</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label for="phno">Owner's Phone No:</label>
                      <input type="text" class="form-control" placeholder="Phone No" id="phno"  required="required" name="phno" value="<?php echo $data['phno_of_owner'] ?>">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label for="pice">Price Ks:</label>
                      <input type="text" class="form-control" placeholder="Price Laks" id="price"  required="required" name="price" value="<?php echo $data['price']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group  col-lg-6 col-md-6 col-sm-6">
                    <label for="file">Choose Pictures</label>
                    <input type="file" name="files[]" class="form-control-file" multiple>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6">
                        <label for="video">YouTube Video:</label>
                        <input type="text" class="form-control" placeholder="YouTube Link" id="video"  required="required" name="video" value="<?php echo $data['video']; ?>">
                  </div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                  <label>Description</label>
                  <textarea class="form-control" name="description" rows="5" value="<?php echo($data['description']); ?>"></textarea>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6" hidden="hidden">
                      <label for="agent">Agent:</label>
                      <input type="text" class="form-control" placeholder="Agent" id="agent"  required="required" name="agent" value="Trio">
                </div>
                <div class="form-group col-lg-3 col-md-3 col-sm-3 row justify-content-between">
                    <input type="reset" name="Clear" value="Clear" class="btn btn-danger col-lg-3 col-md-3 col-sm-3">
                    <input type="submit" name="save_post" value="Post" class="btn btn-success col-lg-3 col-md-3 col-sm-5">
                    <input type="submit" name="after_sell" value="After Sell" class="btn btn-primary col-lg-5 col-md-3 col-sm-3">
                </div>
            </form>
        </div>