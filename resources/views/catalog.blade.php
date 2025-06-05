@include('header')

<style>
.action-widh{
    min-width: 175px;
  }
</style>

    <main>
 <div class="bredcamp">
     @if($searchData)
    
      <ul>
        <li><a href="{{ url('/catalouge?taxon=' . $searchData[0]->superfamily) }}">{{ $searchData[0]->superfamily }}</a></li>
        
        <li><i class="fa-solid fa-angles-right"></i></li>
        
        <li><a href="{{ url('/catalouge?taxon=' . $searchData[0]->family) }}">{{ $searchData[0]->family }}</a></li>
        
         <li><i class="fa-solid fa-angles-right"></i></li>
         
        <li><a href="{{ url('/catalouge?taxon=' . $searchData[0]->subfamily) }}" class="">{{ $searchData[0]->subfamily }}</a></li>

        
        <li><i class="fa-solid fa-angles-right"></i></li>
        
        <li><a href="{{ url('/catalouge?taxon=' . $searchData[0]->genus_name) }}" class="active">{{ $searchData[0]->genus_name }}</a></li>

      </ul>
      
      @endif
     </div>
        <div class="page-title">

            <h1 data-aos="fade-in">Catalogue</h1>

            <!-- <img src="./images/lapidoptera.png" class="img-fluid"/> -->

        </div>

        <div class="search-area" data-aos="fade-up" data-aos-easing="linear">

            <div class="container-fluid">

                <form class="row d-flex justify-content-center" action="{{ route('catalouge') }}" method="GET">

                <div class="col-lg-3 p-0"></div>
                <div clas="col-sm-9">
                    <h4 style="margin-left: 7.7%;color: #fff;font-weight: normal;">Advance Search</h4>
                </div>

                    <div class="col-lg-3 p-0">
                    

                        <input type="text" name="taxon" class="form-control py-2" value='{{$taxon}}' placeholder="Taxon"/>

                    </div>

                    <div class="col-lg-3 p-0">

                        <input type="text" name="author" class="form-control py-2" value='{{$author}}' placeholder="Author"/>

                    </div>

                    <div class="col-lg-3 p-0">

                        <input type="text" name="region" class="form-control py-2 dt-input" value='{{$region}}' id="dt-search-0" aria-controls="example" placeholder="Region" />

                    </div>

                    <button class="btn col-lg-1 p-0 bg-dark" type="submit">

                        <i class="fa-solid fa-magnifying-glass text-light"></i>

                    </button >

        

                    <!--<a id="filter-btn" class="btn col-lg-2 p-0 position-relative d-flex align-items-center justify-content-center g-3">-->

                    <!--    <i class="fa-solid fa-filter px-1"></i> Filter-->

                    <!--    <div class="filter-drop-down">-->

                    <!--        <input type="text" placeholder="Texon Name" class="mb-2 text-dark" />-->

                    <!--        <input type="text" placeholder="Author Name" class="mb-2 text-dark" />-->

                    <!--        <input type="text" placeholder="Region Name" class="mb-2 text-dark" />-->

                    <!--        <button type="submit">Search</button>-->

                    <!--    </div>-->

                    <!--</a>-->



                    

                   

                </form>

            </div>

        </div>



        <div class="table-structure px-4" data-aos="fade-up">



            <table id="example" class="display" style="width:100%">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Superfamily</th>

                        <th>Family</th>

                        <th>Subfamily</th>
                        
                        <th>Tribe</th>
                        
                         <th>Genus</th>


                        <th>Species</th>

                        <th>Subspecies</th>

                        <th>Author</th>

                        <th>Year</th>

                        <th class="action-widh">Action</th>

                    </tr>

                </thead>

                <tbody>

                    @if($searchData)

                    <?php $i=1; ?>

                    @foreach($searchData as $data)

                    <?php if($data->subspecies==''){

                        $subspc='--';

                    }else{

                      $subspc=$data->subspecies;  

                    }
                    
                                      $likes = $data->species_author;
                                      $schools_array = explode("|", $likes);
                    $result = count($schools_array);
                    $modifiedString = str_replace(' |', ',', $likes);
    
    // Find the last comma and replace it with &
    $lastCommaPosition = strrpos($modifiedString, ',');
    if ($lastCommaPosition !== false) {
        $modifiedString = substr_replace($modifiedString, ' &', $lastCommaPosition, 1);
    }
                    
                    ?>

                    <tr>

                        <td><?=$i;?></td>

                        <td>{{$data->superfamily}}</td>

                        <td>{{$data->family}}</td>

                        <td>{{$data->subfamily}}</td>
                        
                       <td>{{$data->tribe}}</td>
                        
                        <td>{{$data->genus_name}}</td>



                        <td>{{$data->species}}</td>

                        

                        <td>{{$subspc}}</td>

                        <!--<td>{{Str::replace('|',',',$modifiedString)}}</td>-->
                        <?php if($result==2){?>
                            <td>{{Str::replace('|',' & ',$modifiedString)}}</td>
                        <?php }else{?>
                        <td>{{Str::replace('|',',',$modifiedString)}}</td>
                        <?php } ?>

                        <td>{{$data->species_year}}</td>

                        <td><a href="{{ route ('calalouge.details',$data->code) }}">Show Details</a></td>

                    </tr>

                    <?php $i++; ?>

                    @endforeach

                    @else

                    <p>No Data Found</p>

                    @endif

                    <!--<tr>-->

                    <!--    <td>2</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>3</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>4</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>5</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>6</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>7</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>8</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>9</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>10</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>11</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>12</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>13</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>14</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>15</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>16</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>17</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>18</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>19</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a ></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                    <!--<tr>-->

                    <!--    <td>20</td>-->

                    <!--    <td>Erebidae</td>-->

                    <!--    <td>Arctiinae</td>-->

                    <!--    <td>Amerilini</td>-->

                    <!--    <td>Amerlia</td>-->

                    <!--    <td>astreus</td>-->

                    <!--    <td>--</td>-->

                    <!--    <td>Drury</td>-->

                    <!--    <td>1773</td>-->

                    <!--    <td><a href="view-details.html">Show Details</a></td>-->

                    <!--</tr>-->

                </tbody>

                <!--<tfoot>-->

                <!--    <tr>-->

                <!--        <td>20</td>-->

                <!--        <td>Erebidae</td>-->

                <!--        <td>Arctiinae</td>-->

                <!--        <td>Amerilini</td>-->

                <!--        <td>Amerlia</td>-->

                <!--        <td>astreus</td>-->

                <!--        <td>--</td>-->

                <!--        <td>Drury</td>-->

                <!--        <td>1773</td>-->

                <!--        <td><a href="view-details.html">Show Details</a></td>-->

                <!--    </tr>-->

                <!--</tfoot>-->

            </table>



        </div>

    </main>

    







@include('footer')