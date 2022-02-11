<?php
    use App\Models\Standing;

    if(!function_exists('HStanding_give_me'))
    {
        function HStanding_give_me($league, $season, $teams)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

                $model = Standing::where('leagueapi_id', '=', $league)
                                    ->where('season', '=', $season)
                                    ->where('teams', '=', $teams)
                                    ->first();


            // ----------------------------------------------------------- Action  
                if(isset($model->points)) 
                {
                    $isi .= $model->points;
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HStanding_give_me_wdl'))
    {
        function HStanding_give_me_wdl($league, $season, $teams)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

                $model = Standing::where('leagueapi_id', '=', $league)
                                    ->where('season', '=', $season)
                                    ->where('teams', '=', $teams)
                                    ->first();


            // ----------------------------------------------------------- Action  
                if(isset($model->points) )
                {
                    $isi .= $model->wins.'-'.$model->draws.'-'.$model->loses;
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HStanding_give_me_gfga'))
    {
        function HStanding_give_me_gfga($league, $season, $teams)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

                $model = Standing::where('leagueapi_id', '=', $league)
                                    ->where('season', '=', $season)
                                    ->where('teams', '=', $teams)
                                    ->first();


            // ----------------------------------------------------------- Action  
                if(isset($model->points)) 
                {
                    $isi .= $model->goals_for.':'.$model->goals_against;
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HStanding_marker'))
    {
        function HStanding_marker($league, $season, $teams)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

                $model = Standing::where('leagueapi_id', '=', $league)
                                    ->where('season', '=', $season)
                                    ->where('teams', 'like', $teams)
                                    ->first();


            // ----------------------------------------------------------- Action  
                if(isset($model->marker) && !is_null($model->marker)) 
                {
                    $isi .= $model->marker;
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }