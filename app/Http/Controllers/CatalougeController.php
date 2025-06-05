<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

        class CatalougeController extends Controller
        {
        
            // public function index_old(Request $request){
        
            //         $taxon = trim($request->input('taxon'));
            //         $author=trim($request->input('author'));
            //         $region=trim($request->input('region'));
                    
            //         if($taxon=='' && $author=='' && $region==''){
            //          $data=DB::select("select * from tbl_arctiinae order by code desc limit 100 ");   
            //         }
            //         else if($taxon!='' && $author=='' && $region==''){
            //         $data=DB::select("select * from tbl_arctiinae where family LIKE '$taxon%' OR subfamily  LIKE '$taxon%' OR tribe LIKE '$taxon%' OR subtribe LIKE '$taxon%' OR 
            //         genus_name LIKE '$taxon%' OR species LIKE '$taxon%' OR subspecies LIKE '$taxon%'");
                    
            //         }
                    
            //         else if($taxon=='' && $author!='' && $region==''){
            //         $data=DB::select("select * from tbl_arctiinae where species_author LIKE '$author%' ");
                    
            //         }
                    
            //         else if($taxon=='' && $author=='' && $region!=''){
            //         $data=DB::select("select * from tbl_arctiinae where zones LIKE '$region%' OR states LIKE '$region%' OR protected_areas LIKE '$region%'");
                    
            //         }
                    
            //         else if($taxon!='' && $author!='' && $region!=''){
            //         $data=DB::select("select * from tbl_arctiinae where family LIKE '$taxon%' OR subfamily  LIKE '$taxon%' OR tribe LIKE '$taxon%' OR subtribe LIKE '$taxon%' OR 
            //         genus_name LIKE '$taxon%' OR species LIKE '$taxon%' OR subspecies LIKE '$taxon%' and species_author LIKE '$author%' and zones LIKE '$region%' OR states LIKE '$region%' OR protected_areas LIKE '$region%'");
                    
            //         }else{
            //          $data=DB::select("select * from tbl_arctiinae where family LIKE '$taxon%' OR subfamily  LIKE '$taxon%' OR tribe LIKE '$taxon%' OR subtribe LIKE '$taxon%' OR 
            //         genus_name LIKE '$taxon%' OR species LIKE '$taxon%' OR subspecies LIKE '$taxon%' OR species_author LIKE '$author%' OR zones LIKE '$region%' OR states LIKE '$region%' OR protected_areas LIKE '$region%'");   
            //         }
                
                
            //     return view('catalog',['searchData'=>$data,'taxon'=>$taxon,'author'=>$author,'region'=>$region,]);
            // }
            
            
            
            
            
            public function index(Request $request)
            {
                $taxon = trim($request->input('taxon'));
                $author = trim($request->input('author'));
                $region = trim($request->input('region'));
            
                $query = DB::table('tbl_arctiinae');
            
                if ($taxon || $author || $region) {
                    $query->where(function($q) use ($taxon, $author, $region) {
                        $columns = ['superfamily','family', 'subfamily', 'tribe', 'subtribe', 'genus_name', 'species', 'subspecies', 'species_author', 'zones', 'states', 'protected_areas'];
                        if ($taxon) {
                            foreach ($columns as $column) {
                                $q->orWhere($column, 'like', '%'.$taxon.'%');
                            }
                        }
                        if ($author) {
                            foreach ($columns as $column) {
                                $q->orWhere($column, 'like', '%'.$author.'%');
                            }
                        }
                        if ($region) {
                            foreach ($columns as $column) {
                                $q->orWhere($column, 'like', '%'.$region.'%');
                            }
                        }
                    });
                    
                    //$data = $query->orderBy('code','asc')->get();
                     //$data = $query->orderBy('superfamily', 'family', 'subfamily', 'tribe',  'genus_name', 'species','asc')->get();
                     $data = $query
    ->orderBy('superfamily', 'asc')
    ->orderBy('family', 'asc')
    ->orderBy('subfamily', 'asc')
    ->orderBy('tribe', 'asc')
    ->orderBy('genus_name', 'asc')
    ->orderBy('species', 'asc')
    ->get();
                }else{
                    //$data = $query->orderBy('code','asc')->limit(100)->get();
                    $data=DB::select("select * from tbl_arctiinae ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species limit 100 ");   
                }
            
                // $sql = $query->toSql();
                // dd($sql);
            
                return view('catalog', ['searchData' => $data, 'taxon' => $taxon, 'author' => $author, 'region' => $region]);
            }
            
            
            
            
             public function index2(Request $request){
        
                    $taxon = trim($request->input('taxon'));
                    $author=trim($request->input('author'));
                    $region=trim($request->input('region'));
                    
                    if($taxon=='' && $author=='' && $region==''){
                     $data=DB::select("select * from tbl_arctiinae ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species limit 100 ");   
                    }
                    else if($taxon!='' && $author=='' && $region==''){
                    $data=DB::select("select * from tbl_arctiinae where family LIKE '$taxon%' OR subfamily  LIKE '$taxon%' OR tribe LIKE '$taxon%' OR subtribe LIKE '$taxon%' OR 
                    genus_name LIKE '$taxon%' OR species LIKE '$taxon%' OR subspecies LIKE '$taxon%' ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species");
                    
                    }
                    
                    else if($taxon=='' && $author!='' && $region==''){
                    $data=DB::select("select * from tbl_arctiinae where species_author LIKE '$author%' ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species");
                    
                    }
                    
                    else if($taxon=='' && $author=='' && $region!=''){
                    $data=DB::select("select * from tbl_arctiinae where zones LIKE '$region%' OR states LIKE '$region%' OR protected_areas LIKE '$region%' ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species");
                    
                    }
                    
                    else if($taxon!='' && $author!='' && $region!=''){
                    $data=DB::select("select * from tbl_arctiinae where family LIKE '$taxon%' OR subfamily  LIKE '$taxon%' OR tribe LIKE '$taxon%' OR subtribe LIKE '$taxon%' OR 
                    genus_name LIKE '$taxon%' OR species LIKE '$taxon%' OR subspecies LIKE '$taxon%' and species_author LIKE '$author%' and zones LIKE '$region%' OR states LIKE '$region%' OR protected_areas LIKE '$region%' ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species");
                    
                    }else{
                     $data=DB::select("select * from tbl_arctiinae where family LIKE '$taxon%' OR subfamily  LIKE '$taxon%' OR tribe LIKE '$taxon%' OR subtribe LIKE '$taxon%' OR 
                    genus_name LIKE '$taxon%' OR species LIKE '$taxon%' OR subspecies LIKE '$taxon%' OR species_author LIKE '$author%' OR zones LIKE '$region%' OR states LIKE '$region%' OR protected_areas LIKE '$region%' ORDER BY superfamily, family, subfamily, tribe,  genus_name,  species");   
                    }
                
                
                
                return view('catalog2',['searchData'=>$data,'taxon'=>$taxon,'author'=>$author,'region'=>$region,]);
            }
            
            
                public function catalouge_details($id)    {
                  $data=DB::select("select * from tbl_arctiinae where code='".$id."'");
                   return view('view-details',['data'=>$data]);
                }
                
                public function catalouge_details2($id)    {
                    $data=DB::select("select * from tbl_arctiinae where code='".$id."'");
                     return view('view-details2',['data'=>$data]);
                  }
            //
            
            
            
            
            
            public function getSuggestions(Request $request)
            {
                $searchValue = trim($request->input('search_value')); 
                $columns = ['superfamily','family', 'subfamily', 'tribe', 'subtribe', 'genus_name', 'species', 'subspecies', 'species_author', 'zones', 'states', 'protected_areas'];
                $suggestions = [];
                if ($searchValue) {
                    foreach ($columns as $column) {
                        $results = DB::table('tbl_arctiinae')
                                        ->select($column)
                                        ->where($column, 'like', '%'.$searchValue.'%')
                                        ->distinct() 
                                        ->limit(10) 
                                        ->get();

                        foreach ($results as $result) {
                            $suggestions[] = $result->{$column};
                        }
                    }
                }
                return response()->json(array_values(array_unique($suggestions))); 
            }
            
            
            
            
            
        }
