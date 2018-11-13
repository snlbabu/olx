<div class="row" style="border:1px solid red; background-color: #B0CFDA; padding: 15px; border-radius: 10px">
                <div class="col-md-4">
                    <label>Select your city and view local Ads</label>
                    <select type="text" name="location" class="form-control">
                        <option>Addur</option>
                        <option>Adityapatna</option>
                        <option>Adyar</option>
                        <option>Afzalpur</option>
                        <option>Agumbe</option>
                        <option>Aland</option>
                        <option>Alevoor</option>
                        <option>Allipura</option>
                        <option>Alnavar</option>
                        <option>Alur</option>
                        <option>Ambikanagara</option>
                        <option>Amble Industrial Area</option>
                        <option>Aminagad</option>
                        <option>Ankola</option>
                        <option>Annigeri</option>
                        <option>Arasinakunte</option>
                        <option>Arkalgud</option>
                        <option>Arkula</option>
                        <option>Arsikere</option>
                        <option>Athni</option>
                        <option>Aurad</option>
                        <option>Aversa</option>
                        <option>Bada</option>
                        <option>Badagaulipady</option>
                        <option>Badami</option>
                        <option>Bagalkot</option>
                        <option>Bagepalli</option>
                        <option>Bail Hongal</option>
                        <option>Ballari</option>
                        <option>Bangarapet</option>
                        <option>Bangarpet Industrial Area</option>
                        <option>Bankapura</option>
                        <option>Bannur</option>
                        <option>Bantval</option>
                        <option>Basavakalyan</option>
                        <option>Basavana Bagevadi</option>
                        <option>Belagavi</option>
                        <option>Beltangadi</option>
                        <option>Belur</option>
                        <option>Belur Industrial Area</option>
                        <option>Bengaluru</option>
                        <option>Bethamangala</option>
                        <option>Bhadravati</option>
                        <option>Bhalki</option>
                        <option>Bhatkal</option>
                        <option>Bhimarayanagudi</option>
                        <option>Bidar</option>
                        <option>Bilgi</option>
                        <option>Birur</option>
                        <option>Bobruwada</option>
                        <option>Bommanahalli</option>
                        <option>Byadgi</option>
                        <option>Byatarayanapura</option>
                        <option>Chamrajnagar</option>
                        <option>Channagiri</option>
                        <option>Channapatna</option>
                        <option>Channarayapatna</option>
                        <option>Chelur</option>
                        <option>Chikkajajur</option>
                        <option>Chikkamagaluru</option>
                        <option>Chiknayakanhalli</option>
                        <option>Chikodi</option>
                        <option>Chincholi</option>
                        <option>Chintamani</option>
                        <option>Chitapur</option>
                        <option>Chitgoppa</option>
                        <option>Chitradurga</option>
                        <option>Dandeli</option>
                        <option>Dargajogihalli</option>
                        <option>Davanagere</option>
                        <option>Devadurga</option>
                        <option>Dharwad</option>
                        <option>Dobaspet Industrial Area</option>
                        <option>Doddaballapura Apparel Park</option>
                        <option>Donimalai Township</option>
                        <option>Elwala</option>
                        <option>Gadag</option>
                        <option>Gadag Betigeri</option>
                        <option>Gajendragarh</option>
                        <option>Gangawati</option>
                        <option>Ganjimutt</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Browse Categories</label>
                    <select type="text" name="location" class="form-control">
                        @foreach($cat as $k => $c)
                        <optgroup label="{{$k}}">
                            @foreach($c as $s)
                            <option value="{{$s}}">{{$s}} </option>
                            @endforeach
                        </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Search for a specific product</label>
                    <div class="input-group">
                        <input type="text" name="location" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                </div>
            </div>



All in Jobs 
Data entry & Back office
BPO & Telecaller 
Operator & Technician 
Sales & Marketing 
Cook 
Driver 
Hotel & Travel Executive data
IT Engineer & Developer data
Designer 
Office Assistant 
Receptionist & Front office data
Delivery & Collection 
Accountant 
Teacher 
Others 









