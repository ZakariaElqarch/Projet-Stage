<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardContorller extends Controller
{
    //
    public function index()
    {
        // $Months = DB::select("SELECT MONTH(STR_TO_DATE(validity, '%m/%d/%Y')) AS month_number FROM gestion_convention.projects WHERE STR_TO_DATE(validity, '%m/%d/%Y') GROUP BY MONTH(STR_TO_DATE(validity, '%m/%d/%Y'))");
        $DataBarinitiale = DB::select("SELECT  MONTH(SUBSTR(validity, 1, 10)) AS month_number, COUNT(*) AS num_records FROM projects WHERE SUBSTR(validity, 1, 10) and phase ='initiale'  GROUP BY  MONTH(SUBSTR(validity, 1, 10)) order by month_number asc;");
       
        $DataBarexecution= DB::select("SELECT  MONTH(SUBSTR(validity, 1, 10)) AS month_number, COUNT(*) AS num_records FROM projects WHERE SUBSTR(validity, 1, 10) and phase ='execution'  GROUP BY  MONTH(SUBSTR(validity, 1, 10)) order by month_number asc");
        
        $DataBarrealise= DB::select("SELECT  MONTH(SUBSTR(validity, 1, 10)) AS month_number, COUNT(*) AS num_records FROM gestion_convention_test.projects WHERE SUBSTR(validity, 1, 10) and phase ='realise'  GROUP BY  MONTH(SUBSTR(validity, 1, 10)) order by month_number asc");
        $Months =array(
            1 =>'Janvier', 
            2 =>'Fevrier', 
            3 =>'Mars', 
            4 =>'Avril' ,
            5 =>'Mai',
            6 =>'Juin',
            7 => 'Juillet',
            8 =>'Aout', 
            9 =>'Septembre',
            10 =>'Octobre',
            11 => 'Novembre',
            12 => 'December'
        );
            
          


 

        return view('contents.dashboard')
                            ->with('DataBarinitiale', $DataBarinitiale)
                            ->with('DataBarexecution', $DataBarexecution)
                            ->with('Months', $Months)
                            ->with('DataBarrealise', $DataBarrealise)
                            ;
    }
}
