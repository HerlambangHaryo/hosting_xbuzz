<?php
    use App\Models\Mybet;

    if(!function_exists('HMyBet_give_me'))
    {
        function HMyBet_give_me($id)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

                $model = Mybet::where('fixtureapi_id', '=', $id)
                                ->get();


            // ----------------------------------------------------------- Action   
                foreach ($model as $row) 
                {
                    $isi .= $row->bookmakers_bets_values_name.' '.$row->bookmakers_bets_values_value;
                    $isi .= '<br/>';
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }