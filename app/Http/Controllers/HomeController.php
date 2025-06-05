<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

        class HomeController extends Controller
        {
        
        public function index(){
            
            $count=DB::table('tbl_arctiinae')->count();
            
            return view('index')->with(['count'=>$count]);
        }
        
               public function statistics(){

        $YearData=DB::select("SELECT
    10*FLOOR(species_graph_year/10) AS year, concat(10*FLOOR(species_graph_year/10),'-',(10*FLOOR(species_graph_year/10)+9) )AS decade,
    count(code) countdata
FROM tbl_arctiinae
GROUP BY 1
order by year  limit 6;") ;




$stateList=DB::select("select * from tbl_state order by id asc limit 6");

foreach($stateList as $state){

    $searchstate[]=DB::select("select '$state->state_name' state,count(code) countcode from tbl_arctiinae where states like '%{$state->state_name}%' order by state desc");
}


$authorData=DB::select("SELECT species_author aname,count(code) countdata 
FROM tbl_arctiinae 
group by species_author 
order by aname limit 6;");


$firstGraphData=DB::select("SELECT COUNT(DISTINCT superfamily) superfamily,COUNT(DISTINCT family) family,COUNT(DISTINCT genus_name) genus_name,COUNT(species) species
FROM tbl_arctiinae");



$zoneList=DB::select("select * from tbl_zone order by id asc limit 6");

foreach($zoneList as $zone){
 $searchZone[]=DB::select("select '$zone->zone_name' zone,count(code) countcode from tbl_arctiinae where zones like '%{$zone->zone_name}%' ");   
}

//dd($data);
            return view('statistics',['data'=>$YearData,'author'=>$authorData,'stateList'=>$searchstate,'all'=>$firstGraphData,'zones'=>$searchZone]);
        }
        
        
         public function graph2(){
            return view('graph2');
        }
        
        
         //Load details graphs
    public function decade(){
        $YearData = DB::select("SELECT
        10*FLOOR(species_graph_year/10) AS year, concat(10*FLOOR(species_graph_year/10),'-',(10*FLOOR(species_graph_year/10)+9) )AS decade,
        count(code) countdata
        FROM tbl_arctiinae
        GROUP BY 1
        order by 1;");
        return view('decade_graph',['data' => $YearData]);
    }

    // public function author(){  
    //     $authorData=DB::select("SELECT genus_author aname,count(code) countdata 
    //     FROM tbl_arctiinae 
    //     group by genus_author 
    //     order by aname asc;");
    //     return view('author_graph',['author' => $authorData]);
    // }
    
    // public function author() {
    //     $authorData = DB::select("
    //         SELECT aname, COUNT(*) as countdata
    //         FROM (
    //             -- Handling cases where there is a single author (no & symbol)
    //             SELECT TRIM(genus_author) AS aname
    //             FROM tbl_arctiinae
    //             WHERE LOCATE('&', genus_author) = 0
    //             UNION ALL
    //             -- Handling cases with multiple authors separated by & symbol
    //             SELECT TRIM(
    //                 LEAST(SUBSTRING_INDEX(genus_author, '&', 1), SUBSTRING_INDEX(genus_author, '&', -1))
    //             ) AS aname
    //             FROM tbl_arctiinae
    //             WHERE LOCATE('&', genus_author) > 0
    //             UNION ALL
    //             -- Handling the second author in the multiple author case (normalized order)
    //             SELECT TRIM(
    //                 GREATEST(SUBSTRING_INDEX(genus_author, '&', 1), SUBSTRING_INDEX(genus_author, '&', -1))
    //             ) AS aname
    //             FROM tbl_arctiinae
    //             WHERE LOCATE('&', genus_author) > 0
    //         ) AS authors
    //         GROUP BY aname
    //         ORDER BY aname ASC;
    //     ");
    //     return view('author_graph', ['author' => $authorData]);
    // }
    
    
    
public function author(){
    $authorData = DB::select("SELECT TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(species_author, '|', numbers.n), '|', -1)) AS aname,
       COUNT(*) AS countdata
FROM tbl_arctiinae
JOIN ( SELECT 1 AS n UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 
    UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9 UNION ALL SELECT 10 ) AS numbers 
ON CHAR_LENGTH(species_author) - CHAR_LENGTH(REPLACE(species_author, '|', '')) >= numbers.n - 1
WHERE TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(species_author, '|', numbers.n), '|', -1)) <> ''
GROUP BY aname
ORDER BY aname ASC");
    
    return view('author_graph', ['author' => $authorData]);
}




    public function state(){
        $stateList = DB::select("select * from tbl_state_new");

        foreach ($stateList as $state) {

            $searchstate[] = DB::select("select '$state->state_name' state,count(code) countcode from tbl_arctiinae where states like '%{$state->state_name}%' order by state desc");
        }
        //dd($searchstate);

        return view('state_graph',['stateList' => $searchstate]);
    }

    public function zone(){
        $zoneList=DB::select("select * from tbl_zone order by id asc");

        foreach($zoneList as $zone){
         $searchZone[]=DB::select("select '$zone->zone_name' zone,count(code) countcode from tbl_arctiinae where zones like '%{$zone->zone_name}%' ");   
        }
        return view('zone_graph',['zones'=>$searchZone]);
    


    }
    
    
        
        }