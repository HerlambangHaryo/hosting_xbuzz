<?php

    use App\Models\Fixture;

// World
    use App\Models\Odd_world_uefa_champions_league; // 2
    use App\Models\Odd_world_uefa_europa_conference_league; // 848
    use App\Models\Odd_world_uefa_europa_league; // 3

// England
    use App\Models\Odd_england_premier_league; // 39
    use App\Models\Odd_england_championship; // 40
    use App\Models\Odd_england_league_one; // 41
    use App\Models\Odd_england_league_two; // 42
    use App\Models\Odd_england_league_national; // 43
    use App\Models\odd_england_fa_thropy; // 45

// France
    use App\Models\Odd_france_ligue_1; // 61
    use App\Models\Odd_france_ligue_2; // 62
    use App\Models\Odd_france_national; // 63
    use App\Models\Odd_france_coupe_de_france; // 66

// GErmany
    use App\Models\Odd_germany_bundesliga_1; // 78
    use App\Models\Odd_germany_bundesliga_2; // 79
    use App\Models\Odd_germany_liga_3; // 80

// Netherland
    use App\Models\Odd_netherlands_eredivisie; // 88 
    use App\Models\Odd_netherlands_eerste_divisie; //89
    use App\Models\Odd_netherlands_knvb_beker; //90

// Portugal
    use App\Models\Odd_portugal_primiera_liga; // 94
    use App\Models\Odd_portugal_liga_de_honra; // 95

// Poland
    use App\Models\Odd_poland_ekstraklasa; // 106

// Italy
    use App\Models\Odd_italy_serie_a; // 135
    use App\Models\Odd_italy_serie_b; // 136
    use App\Models\Odd_italy_coppa_italia; // 137
    use App\Models\Odd_italy_serie_c; // 138

// Spain
    use App\Models\Odd_spain_la_liga; // 140
    use App\Models\Odd_spain_segunda_division; // 141
    use App\Models\Odd_spain_copa_del_rey; // 143

// Belgium
    use App\Models\odd_belgium_jupiler_pro; // 144
    use App\Models\odd_belgium_2e_klasse; // 145

// Scotland
    use App\Models\Odd_scotland_premiership; // 179
    use App\Models\Odd_scotland_championship; // 180
    use App\Models\Odd_scotland_league_two; // 184

// Australia    
    use App\Models\Odd_australia_a_league; // 188

// Greece
    use App\Models\Odd_greece_super_league; // 197

// Turkey
    use App\Models\Odd_turkey_super_lig; // 203
    use App\Models\Odd_turkey_tff_1_lig; // 204
    use App\Models\Odd_turkey_cup; // 206

// Switzerland
    use App\Models\Odd_switzerland_super_league; // 207
    use App\Models\Odd_switzerland_challenge_league; // 208
    use App\Models\Odd_switzerland_schweizer_pokal; // 209

// croatia
    use App\Models\odd_croatia_prva_hnl; // 210

// Indonesia
    use App\Models\Odd_indonesia_super_league; // 274

// Romania
    use App\Models\Odd_romania_liga_1; // 283

// qatar
    use App\Models\Odd_qatar_stars_league; // 305

// Czech
    use App\Models\odd_czech_republic_cup; // 347


// Northern-ireland
    use App\Models\Odd_northern_ireland_premiership; // 408



    if(!function_exists('HOdd_give_me'))
    {
        function HOdd_give_me($league, $fixture, $status)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';


                //
                    if($league == 2)       
                    { 
                        $model = Odd_world_uefa_champions_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 3)   
                    { 
                         $model = Odd_world_uefa_europa_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 848) 
                    { 
                        $model = Odd_world_uefa_europa_conference_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                //
                    elseif($league == 39)   
                    { 
                         $model = Odd_england_premier_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 40)   
                    { 
                         $model = Odd_england_championship::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 41)   
                    { 
                         $model = Odd_england_league_one::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 42)   
                    { 
                         $model = Odd_england_league_two::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 43)   
                    { 
                         $model = Odd_england_league_national::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first();  
                    }
                    elseif($league == 45)   
                    { 
                         $model = odd_england_fa_thropy::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first();  
                    }

                    elseif($league == 61)   
                    { 
                         $model = Odd_france_ligue_1::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 62)   
                    { 
                         $model = Odd_france_ligue_2::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 63)   
                    { 
                         $model = Odd_france_national::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 66)   
                    { 
                         $model = Odd_france_coupe_de_france::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // germany
                    elseif($league == 78)   
                    { 
                         $model = Odd_germany_bundesliga_1::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 79)   
                    { 
                         $model = Odd_germany_bundesliga_2::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 80)   
                    { 
                         $model = Odd_germany_liga_3::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // netherland
                    elseif($league == 88)   
                    { 
                         $model = Odd_netherlands_eredivisie::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 89)   
                    { 
                         $model = Odd_netherlands_eerste_divisie::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 90)   
                    { 
                         $model = Odd_netherlands_knvb_beker::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Portugal
                    elseif($league == 94)   
                    { 
                         $model = Odd_portugal_primiera_liga::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 95)   
                    { 
                         $model = Odd_portugal_liga_de_honra::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // polan
                    elseif($league == 106)   
                    { 
                         $model = Odd_poland_ekstraklasa::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Italy
                    elseif($league == 135)   
                    { 
                         $model = odd_italy_serie_a::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 136)   
                    { 
                         $model = odd_italy_serie_b::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 137)   
                    { 
                         $model = Odd_italy_coppa_italia::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 138)   
                    { 
                         $model = odd_italy_serie_c::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // spain
                    elseif($league == 140)   
                    { 
                         $model = Odd_spain_la_liga::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 141)   
                    { 
                         $model = Odd_spain_segunda_division::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 143)   
                    { 
                         $model = Odd_spain_copa_del_rey::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Belgium
                    elseif($league == 144)   
                    { 
                         $model = odd_belgium_jupiler_pro::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 145)   
                    { 
                         $model = odd_belgium_2e_klasse::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Scotland
                    elseif($league == 179)   
                    { 
                         $model = Odd_scotland_premiership::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 180)   
                    { 
                         $model = Odd_scotland_championship::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 184)   
                    { 
                         $model = Odd_scotland_league_two::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Scotland
                    elseif($league == 188)   
                    { 
                         $model = Odd_australia_a_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // 
                    elseif($league == 197)   
                    { 
                         $model = Odd_greece_super_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Turkey
                    elseif($league == 203)   
                    { 
                         $model = Odd_turkey_super_lig::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 204)   
                    { 
                         $model = Odd_turkey_tff_1_lig::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 206)   
                    { 
                         $model = Odd_turkey_cup::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Switzerland
                    elseif($league == 207)   
                    { 
                         $model = Odd_switzerland_super_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 208)   
                    { 
                         $model = Odd_switzerland_challenge_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }
                    elseif($league == 209)   
                    { 
                         $model = Odd_switzerland_schweizer_pokal::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // croatia
                    elseif($league == 210)   
                    { 
                         $model = odd_croatia_prva_hnl::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Indonesia
                    elseif($league == 274)   
                    { 
                         $model = Odd_indonesia_super_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Romania
                    elseif($league == 283)   
                    { 
                         $model = Odd_romania_liga_1::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // qatar
                    elseif($league == 305)   
                    { 
                         $model = Odd_qatar_stars_league::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }


                // czech
                    elseif($league == 347)   
                    { 
                         $model = Odd_czech_republic_cup::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }

                // Northen Ireland 
                    elseif($league == 408)   
                    { 
                         $model = Odd_northern_ireland_premiership::where('leagueapi_id', '=', $league)
                                                                    ->where('fixtureapi_id', '=', $fixture)
                                                                    ->where('status', 'like', $status)
                                                                    ->first(); 
                    }


            // ----------------------------------------------------------- Action   
                if(isset($model))
                {
                    if ($status == 'End') 
                    {
                        $isi .= '<i class="fas fa-check-square text-primary"></i>';
                    }
                    elseif ($status == 'Prematch') 
                    {
                        $isi .= '<i class="fas fa-check-square text-info"></i>';
                    }
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HOdd_odd'))
    {
        function HOdd_odd($league, $fixture, $bookmakersapi_id, $bookmakers_betsapi_id, $status)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '-';

                $model_fixture = Fixture::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)->first();



                //
                    if($league == 2)       
                    { 
                        $model = Odd_world_uefa_champions_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 3)   
                    { 
                         $model = Odd_world_uefa_europa_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 848) 
                    { 
                        $model = Odd_world_uefa_europa_conference_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                //
                    elseif($league == 39)   
                    { 
                        $model = Odd_england_premier_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first(); 
                    }
                    elseif($league == 40)   
                    { 
                        $model = Odd_england_championship::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first(); 
                    }
                    elseif($league == 41)   
                    { 
                        $model = Odd_england_league_one::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first(); 
                    }
                    elseif($league == 42)   
                    { 
                        $model = Odd_england_league_two::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first(); 
                    }
                    elseif($league == 43)   
                    { 
                        $model = Odd_england_league_national::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first(); 
                    }
                    elseif($league == 45)   
                    { 
                        $model = odd_england_fa_thropy::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first(); 
                    }

                    elseif($league == 61)   
                    { 
                        $model = Odd_france_ligue_1::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 62)   
                    { 
                         $model = Odd_france_ligue_2::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 63)   
                    { 
                         $model = Odd_france_national::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 66)   
                    { 
                         $model = Odd_france_coupe_de_france::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                //
                    elseif($league == 78)   
                    { 
                         $model = Odd_germany_bundesliga_1::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 79)   
                    { 
                         $model = Odd_germany_bundesliga_2::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 80)   
                    { 
                         $model = Odd_germany_liga_3::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                //netherlad
                    elseif($league == 88)   
                    { 
                        $model = Odd_netherlands_eredivisie::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 89)   
                    { 
                        $model = Odd_netherlands_eerste_divisie::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 90)   
                    { 
                        $model = Odd_netherlands_knvb_beker::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                //
                    elseif($league == 94)   
                    { 
                        $model = Odd_portugal_primiera_liga::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 95)   
                    { 
                        $model = Odd_portugal_liga_de_honra::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // polan
                    elseif($league == 106)   
                    { 
                         $model = Odd_poland_ekstraklasa::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Italy
                    elseif($league == 135)   
                    { 
                         $model = odd_italy_serie_a::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 136)   
                    { 
                         $model = odd_italy_serie_b::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 137)   
                    { 
                         $model = Odd_italy_coppa_italia::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 138)   
                    { 
                         $model = odd_italy_serie_c::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // spain
                    elseif($league == 140)   
                    { 
                         $model = Odd_spain_la_liga::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 141)   
                    { 
                         $model = Odd_spain_segunda_division::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 143)   
                    { 
                         $model = Odd_spain_copa_del_rey::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Italy
                    elseif($league == 144)   
                    { 
                         $model = odd_belgium_jupiler_pro::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 145)   
                    { 
                         $model = odd_belgium_2e_klasse::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Scotland
                    elseif($league == 179)
                    { 
                        $model = Odd_scotland_premiership::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 180)   
                    { 
                         $model = Odd_scotland_championship::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 184)
                    { 
                        $model = Odd_scotland_league_two::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // australia
                    elseif($league == 188)
                    { 
                        $model = Odd_australia_a_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // 
                    elseif($league == 197)   
                    { 
                         $model = Odd_greece_super_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Turkey
                    elseif($league == 203)   
                    { 
                         $model = Odd_turkey_super_lig::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 204)   
                    { 
                         $model = Odd_turkey_tff_1_lig::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 206)   
                    { 
                         $model = Odd_turkey_cup::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Switzerland
                    elseif($league == 207)   
                    { 
                         $model = Odd_switzerland_super_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 208)   
                    { 
                         $model = Odd_switzerland_challenge_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }
                    elseif($league == 209)   
                    { 
                         $model = Odd_switzerland_schweizer_pokal::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // croatia
                    elseif($league == 210)   
                    { 
                         $model = odd_croatia_prva_hnl::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // indonesia
                    elseif($league == 274)   
                    { 
                         $model = Odd_indonesia_super_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Romania
                    elseif($league == 283)   
                    { 
                         $model = Odd_romania_liga_1::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // qatar
                    elseif($league == 305)   
                    { 
                         $model = Odd_qatar_stars_league::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // Czech
                    elseif($league == 347)
                    { 
                        $model = Odd_czech_republic_cup::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }

                // northern_ireland
                    elseif($league == 408)
                    { 
                        $model = Odd_northern_ireland_premiership::where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakersapi_id', '=', $bookmakersapi_id)
                                                            ->where('bookmakers_betsapi_id', '=', $bookmakers_betsapi_id)
                                                            ->where('status', 'like', $status)
                                                            ->first();  
                    }


            // ----------------------------------------------------------- Action   
                if(isset($model))
                {
                    $temp = str_replace('Home ', '', $model->bookmakers_bets_values_value);
                    $isi = str_replace('Over ', '', $temp);
                }

            // ----------------------------------------------------------- Send
                if($status == 'OneHour' || $status == 'End')
                {
                    $word = '<br/>'.$isi;
                }
                else
                {
                    $word = $isi;
                }
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HOdd_count_exactscore_null'))
    {
        function HOdd_count_exactscore_null($league)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';


                //
                    if($league == 2)       
                    { 
                        $model = Odd_world_uefa_champions_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 3)   
                    { 
                         $model = Odd_world_uefa_europa_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 848) 
                    { 
                       
                         $model = Odd_world_uefa_europa_conference_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                //
                    elseif($league == 39)   
                    { 
                         $model = Odd_england_premier_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 40)   
                    { 
                         $model = Odd_england_championship::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 41)   
                    { 
                         $model = Odd_england_league_one::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 42)   
                    { 
                         $model = Odd_england_league_two::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 43)   
                    { 
                         $model = Odd_england_league_national::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 45)   
                    { 
                         $model = odd_england_fa_thropy::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                    elseif($league == 61)   
                    { 
                         $model = Odd_france_ligue_1::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 62)   
                    { 
                         $model = Odd_france_ligue_2::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 63)   
                    { 
                         $model = Odd_france_national::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 66)   
                    { 
                         $model = Odd_france_coupe_de_france::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // germany
                    elseif($league == 78)   
                    { 
                         $model = Odd_germany_bundesliga_1::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 79)   
                    { 
                         $model = Odd_germany_bundesliga_2::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 80)   
                    { 
                         $model = Odd_germany_liga_3::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // nehter
                    elseif($league == 88)   
                    { 
                         $model = Odd_netherlands_eredivisie::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 89)   
                    { 
                         $model = Odd_netherlands_eerste_divisie::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 90)   
                    { 
                         $model = Odd_netherlands_knvb_beker::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Portugal
                    elseif($league == 94)   
                    { 
                         $model = Odd_portugal_primiera_liga::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 95)   
                    { 
                         $model = Odd_portugal_liga_de_honra::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // polan
                    elseif($league == 106)   
                    { 
                         $model = Odd_poland_ekstraklasa::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Italy
                    elseif($league == 135)   
                    { 
                         $model = odd_italy_serie_a::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 136)   
                    { 
                         $model = odd_italy_serie_b::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 137)   
                    { 
                         $model = Odd_italy_coppa_italia::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 138)   
                    { 
                         $model = odd_italy_serie_c::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Belgium
                    elseif($league == 140)   
                    { 
                         $model = Odd_spain_la_liga::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 141)   
                    { 
                         $model = Odd_spain_segunda_division::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 143)   
                    { 
                         $model = Odd_spain_copa_del_rey::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Belgium
                    elseif($league == 144)   
                    { 
                         $model = odd_belgium_jupiler_pro::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 145)   
                    { 
                         $model = odd_belgium_2e_klasse::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Scotland
                    elseif($league == 179)   
                    { 
                         $model = Odd_scotland_premiership::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 180)   
                    { 
                         $model = Odd_scotland_championship::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 184)   
                    { 
                         $model = Odd_scotland_league_two::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Scotland
                    elseif($league == 188)   
                    { 
                         $model = Odd_australia_a_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // 
                    elseif($league == 197)   
                    { 
                         $model = Odd_greece_super_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Turkey
                    elseif($league == 203)   
                    { 
                         $model = Odd_turkey_super_lig::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 204)   
                    { 
                         $model = Odd_turkey_tff_1_lig::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 206)   
                    { 
                         $model = Odd_turkey_cup::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Switzerland
                    elseif($league == 207)   
                    { 
                         $model = Odd_switzerland_super_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 208)   
                    { 
                         $model = Odd_switzerland_challenge_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 209)   
                    { 
                         $model = Odd_switzerland_schweizer_pokal::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // croatia
                    elseif($league == 210)   
                    { 
                         $model = odd_croatia_prva_hnl::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Indonesia
                    elseif($league == 274)   
                    { 
                         $model = Odd_indonesia_super_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Romania
                    elseif($league == 283)   
                    { 
                         $model = Odd_romania_liga_1::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // qatar
                    elseif($league == 305)   
                    { 
                         $model = Odd_qatar_stars_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }


                // czech
                    elseif($league == 347)   
                    { 
                         $model = Odd_czech_republic_cup::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Northen Ireland 
                    elseif($league == 408)   
                    { 
                         $model = Odd_northern_ireland_premiership::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count();  
                    }


            // ----------------------------------------------------------- Action   
            // ----------------------------------------------------------- Send
                $word = $model;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HOdd_list_fixtureapi_by_exactscore'))
    {
        function HOdd_list_fixtureapi_by_exactscore($league)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';


                //
                    if($league == 2)       
                    { 
                        $model = Odd_world_uefa_champions_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_world_uefa_europa_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_world_uefa_europa_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 3)   
                    { 
                         $model = Odd_world_uefa_europa_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_world_uefa_europa_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_world_uefa_europa_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 848) 
                    { 
                        $model = Odd_world_uefa_europa_conference_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_world_uefa_europa_conference_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_world_uefa_europa_conference_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                //
                    elseif($league == 39)   
                    { 
                         $model = Odd_england_premier_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_england_premier_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_england_premier_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 40)   
                    { 
                        $model = Odd_england_championship::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_england_championship::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_england_championship::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 41)   
                    { 
                         $model = Odd_england_league_one::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_england_league_one::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_england_league_one::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 42)   
                    { 
                         $model = Odd_england_league_two::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_england_league_two::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_england_league_two::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 43)   
                    { 
                         $model = Odd_england_league_national::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_england_league_national::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_england_league_national::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                        // $isi .= '<i class="fas fa-check-square text-info"></i>';
                    }
                    elseif($league == 45)   
                    { 
                         $model = odd_england_fa_thropy::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_england_fa_thropy::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_england_fa_thropy::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                        // $isi .= '<i class="fas fa-check-square text-info"></i>';
                    }

                    elseif($league == 61)   
                    { 
                         $model = Odd_france_ligue_1::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_france_ligue_1::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_france_ligue_1::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 62)   
                    { 
                         $model = Odd_france_ligue_2::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_france_ligue_2::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_france_ligue_2::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 63)   
                    { 
                         $model = Odd_france_national::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_france_national::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_france_national::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 66)   
                    { 
                         $model = Odd_france_coupe_de_france::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_france_coupe_de_france::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_france_coupe_de_france::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // germany
                    elseif($league == 78)   
                    { 
                         $model = Odd_germany_bundesliga_1::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_germany_bundesliga_1::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_germany_bundesliga_1::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 79)   
                    { 
                         $model = Odd_germany_bundesliga_2::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_germany_bundesliga_2::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_germany_bundesliga_2::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 80)   
                    { 
                         $model = Odd_germany_liga_3::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_germany_liga_3::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_germany_liga_3::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // nether
                    elseif($league == 88)   
                    { 
                         $model = Odd_netherlands_eredivisie::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_netherlands_eredivisie::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_netherlands_eredivisie::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 89)   
                    { 
                         $model = Odd_netherlands_eerste_divisie::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_netherlands_eerste_divisie::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_netherlands_eerste_divisie::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 90)   
                    { 
                         $model = Odd_netherlands_knvb_beker::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_netherlands_knvb_beker::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_netherlands_knvb_beker::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Portugal
                    elseif($league == 94)   
                    { 
                         $model = Odd_portugal_primiera_liga::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_portugal_primiera_liga::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_portugal_primiera_liga::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 95)   
                    { 
                         $model = Odd_portugal_liga_de_honra::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_portugal_liga_de_honra::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_portugal_liga_de_honra::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // polan
                    elseif($league == 106)   
                    { 
                         $model = Odd_poland_ekstraklasa::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_portugal_liga_de_honra::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_portugal_liga_de_honra::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Italy
                    elseif($league == 135)   
                    { 
                         $model = odd_italy_serie_a::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_italy_serie_a::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_italy_serie_a::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 136)   
                    { 
                         $model = odd_italy_serie_b::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_italy_serie_b::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_italy_serie_b::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 137)   
                    { 
                         $model = Odd_italy_coppa_italia::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_italy_coppa_italia::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_italy_coppa_italia::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 138)   
                    { 
                         $model = odd_italy_serie_c::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_italy_serie_c::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_italy_serie_c::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // spain
                    elseif($league == 140)   
                    { 
                         $model = Odd_spain_la_liga::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_spain_la_liga::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_spain_la_liga::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 141)   
                    { 
                         $model = Odd_spain_segunda_division::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_spain_segunda_division::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_spain_segunda_division::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 143)   
                    { 
                         $model = Odd_spain_copa_del_rey::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_spain_copa_del_rey::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_spain_copa_del_rey::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Belgium
                    elseif($league == 144)   
                    { 
                         $model = odd_belgium_jupiler_pro::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_belgium_jupiler_pro::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_belgium_jupiler_pro::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 145)   
                    { 
                         $model = odd_belgium_2e_klasse::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_belgium_2e_klasse::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_belgium_2e_klasse::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Scotland
                    elseif($league == 179)   
                    { 
                         $model = Odd_scotland_premiership::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_scotland_premiership::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_scotland_premiership::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 180)   
                    { 
                         $model = Odd_scotland_championship::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_scotland_championship::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_scotland_championship::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 184)   
                    { 
                         $model = Odd_scotland_league_two::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_scotland_league_two::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_scotland_league_two::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Scotland
                    elseif($league == 188)   
                    { 
                         $model = Odd_australia_a_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_australia_a_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_australia_a_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // 
                    elseif($league == 197)   
                    { 
                         $model = Odd_greece_super_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_greece_super_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_greece_super_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Turkey
                    elseif($league == 203)   
                    { 
                         $model = Odd_turkey_super_lig::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_turkey_super_lig::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_turkey_super_lig::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 204)   
                    { 
                         $model = Odd_turkey_tff_1_lig::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_turkey_tff_1_lig::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_turkey_tff_1_lig::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 206)   
                    { 
                         $model = Odd_turkey_cup::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_turkey_cup::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_turkey_cup::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Switzerland
                    elseif($league == 207)   
                    { 
                         $model = Odd_switzerland_super_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_switzerland_super_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_switzerland_super_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 208)   
                    { 
                         $model = Odd_switzerland_challenge_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_switzerland_challenge_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_switzerland_challenge_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }
                    elseif($league == 209)   
                    { 
                         $model = Odd_switzerland_schweizer_pokal::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_switzerland_schweizer_pokal::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_switzerland_schweizer_pokal::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // croatia
                    elseif($league == 210)   
                    { 
                         $model = odd_croatia_prva_hnl::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = odd_croatia_prva_hnl::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = odd_croatia_prva_hnl::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Indonesia
                    elseif($league == 274)   
                    { 
                         $model = Odd_indonesia_super_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_indonesia_super_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_indonesia_super_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Romania
                    elseif($league == 283)   
                    { 
                         $model = Odd_romania_liga_1::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_romania_liga_1::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_romania_liga_1::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // qatar
                    elseif($league == 305)   
                    { 
                         $model = Odd_qatar_stars_league::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_qatar_stars_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_qatar_stars_league::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }


                // czech
                    elseif($league == 347)   
                    { 
                         $model = Odd_czech_republic_cup::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_czech_republic_cup::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_czech_republic_cup::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        }
                    }

                // Northen Ireland 
                    elseif($league == 408)   
                    { 
                         $model = Odd_northern_ireland_premiership::select('fixtureapi_id')
                                                                    ->whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('fixtureapi_id');

                        $pra_model = Fixture::whereIn('fixtureapi_id', $model)
                                                                    ->whereNotNull('goals_home')
                                                                    ->whereNotNull('goals_away')
                                                                    ->get();

                        foreach ($pra_model as $row) 
                        {
                            $score = $row->goals_home.':'.$row->goals_away;

                            $pra_model_1 = Odd_northern_ireland_premiership::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'Yes'                                
                            ]);

                            $pra_model_1 = Odd_northern_ireland_premiership::where('fixtureapi_id', '=', $row->fixtureapi_id)
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->where('bookmakers_bets_values_value', 'not like', $score);

                            $pra_model_1->update([
                                'exact_score'          => 'No'                                
                            ]);
                        } 
                    }


            // ----------------------------------------------------------- Action   
            // ----------------------------------------------------------- Send
                $word = $model;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HOdd_count_exactscore_odd'))
    {
        function HOdd_count_exactscore_odd($league)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';


                //  
                    if($league == 2)       
                    { 
                        $model = Odd_world_uefa_champions_league::select(
                                                                            'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(*) as count')
                                                                     )
                                                                    ->where('exact_score','like', 'Yes')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->groupby('bookmakers_bets_values_odd')
                                                                    ->orderby(DB::raw('COUNT(*) as count'))
                                                                    ->count(); 
                    }
                    elseif($league == 3)   
                    { 
                         $model = Odd_world_uefa_europa_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();  
                    }
                    elseif($league == 848) 
                    { 
                        $model = Odd_world_uefa_europa_conference_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                //
                    elseif($league == 39)   
                    { 
                         $model = Odd_england_premier_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 40)   
                    { 
                         $model = Odd_england_championship::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();  
                    }
                    elseif($league == 41)   
                    { 
                         $model = Odd_england_league_one::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 42)   
                    { 
                         $model = Odd_england_league_two::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 43)   
                    { 
                         $model = Odd_england_league_national::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 45)   
                    { 
                         $model = odd_england_fa_thropy::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                    elseif($league == 61)   
                    { 
                         $model = Odd_france_ligue_1::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 62)   
                    { 
                         $model = Odd_france_ligue_2::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 63)   
                    { 
                         $model = Odd_france_national::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 66)   
                    { 
                         $model = Odd_france_coupe_de_france::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // germany
                    elseif($league == 78)   
                    { 
                         $model = Odd_germany_bundesliga_1::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 79)   
                    { 
                         $model = Odd_germany_bundesliga_2::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 80)   
                    { 
                         $model = Odd_germany_liga_3::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // nether
                    elseif($league == 88)   
                    { 
                         $model = Odd_netherlands_eredivisie::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 89)   
                    { 
                         $model = Odd_netherlands_eerste_divisie::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 90)   
                    { 
                         $model = Odd_netherlands_knvb_beker::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Portugal
                    elseif($league == 94)   
                    { 
                         $model = Odd_portugal_primiera_liga::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 95)   
                    { 
                         $model = Odd_portugal_liga_de_honra::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // polan
                    elseif($league == 106)   
                    { 
                         $model = Odd_poland_ekstraklasa::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Italy
                    elseif($league == 135)   
                    { 
                         $model = odd_italy_serie_a::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 136)   
                    { 
                         $model = odd_italy_serie_b::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 137)   
                    { 
                         $model = Odd_italy_coppa_italia::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 138)   
                    { 
                         $model = odd_italy_serie_c::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Belgium
                    elseif($league == 140)   
                    { 
                         $model = Odd_spain_la_liga::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 141)   
                    { 
                         $model = Odd_spain_segunda_division::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 143)   
                    { 
                         $model = Odd_spain_copa_del_rey::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Belgium
                    elseif($league == 144)   
                    { 
                         $model = odd_belgium_jupiler_pro::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 145)   
                    { 
                         $model = odd_belgium_2e_klasse::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Scotland
                    elseif($league == 179)   
                    { 
                         $model = Odd_scotland_premiership::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 180)   
                    { 
                         $model = Odd_scotland_championship::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 184)   
                    { 
                         $model = Odd_scotland_league_two::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Scotland
                    elseif($league == 188)   
                    { 
                         $model = Odd_australia_a_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // 
                    elseif($league == 197)   
                    { 
                         $model = Odd_greece_super_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Turkey
                    elseif($league == 203)   
                    { 
                         $model = Odd_turkey_super_lig::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 204)   
                    { 
                         $model = Odd_turkey_tff_1_lig::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 206)   
                    { 
                         $model = Odd_turkey_cup::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Switzerland
                    elseif($league == 207)   
                    { 
                         $model = Odd_switzerland_super_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 208)   
                    { 
                         $model = Odd_switzerland_challenge_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }
                    elseif($league == 209)   
                    { 
                         $model = Odd_switzerland_schweizer_pokal::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // croatia
                    elseif($league == 210)   
                    { 
                         $model = odd_croatia_prva_hnl::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Indonesia
                    elseif($league == 274)   
                    { 
                         $model = Odd_indonesia_super_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Romania
                    elseif($league == 283)   
                    { 
                         $model = Odd_romania_liga_1::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // qatar
                    elseif($league == 305)   
                    { 
                         $model = Odd_qatar_stars_league::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }


                // czech
                    elseif($league == 347)   
                    { 
                         $model = Odd_czech_republic_cup::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get();
                    }

                // Northen Ireland 
                    elseif($league == 408)   
                    { 
                         $model = Odd_northern_ireland_premiership::select(
                                                                    'bookmakers_bets_values_odd',
                                                                            DB::raw('COUNT(fixtureapi_id) as count')
                                                                     )
                                                            ->where('exact_score','like', 'Yes')
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->groupby('bookmakers_bets_values_odd')
                                                            ->orderby(DB::raw('COUNT(fixtureapi_id)'), 'Desc')
                                                            ->limit(5)
                                                            ->get(); 
                    }


            // ----------------------------------------------------------- Action 

                $isi .= '<table class="table">';
                    $isi .= '<thead>';
                        $isi .= '<tr>';
                            $isi .= '<th>Odd</th>';
                            $isi .= '<th>Count</th>';
                        $isi .= '</tr>';
                    $isi .= '</thead>';
                    $isi .= '<tbody>';
                        foreach ($model as $row) 
                        {
                            $isi .= '<tr>';
                                $isi .= '<td>';
                                    $isi .= $row->bookmakers_bets_values_odd;
                                $isi .= '</td>';
                                $isi .= '<td>';
                                    $isi .= $row->count;
                                $isi .= '</td>';
                            $isi .= '</tr>';
                        } 
                    $isi .= '</tbody>';
                $isi .= '</table>';

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }

    if(!function_exists('HOdd_exact_score_list'))
    {
        function HOdd_exact_score_list($league, $fixture)
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';
                        $pra_model = array();
                $model = array();


                //
                    if($league == 2)       
                    { 
                        $model = Odd_world_uefa_champions_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    /*
                    elseif($league == 3)   
                    { 
                         $model = Odd_world_uefa_europa_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 848) 
                    { 
                         $model = Odd_world_uefa_europa_conference_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */

                //
                    elseif($league == 39)   
                    { 
                        $pra_model = array();

                         $model = Odd_england_premier_league::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [7.5,7,6.5])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();
                    }
                    elseif($league == 40)   
                    { 
                        $pra_model = Odd_england_championship::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [7,8.5])
                                                            ->whereIn('bookmakersapi_id', [8,24])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();

                        $model = Odd_england_championship::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [7,8.5])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();
                    }
                    elseif($league == 41)   
                    { 
                         $pra_model = Odd_england_league_one::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [7,8])
                                                            ->whereIn('bookmakersapi_id', [16,21])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();

                         $model = Odd_england_league_one::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [7,8])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();
                    }
                    elseif($league == 42)   
                    { 
                         $pra_model = Odd_england_league_two::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [8,8.5])
                                                            ->whereIn('bookmakersapi_id', [16,21])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();

                         $model = Odd_england_league_two::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [8,8.5])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();
                    }
                    elseif($league == 43)   
                    { 
                        $pra_model = array();

                         $model = Odd_england_league_national::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [13])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 
                    }
                    elseif($league == 45)   
                    { 
                         $model = odd_england_fa_thropy::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count();  
                    }

                    /*
                    elseif($league == 61)   
                    { 
                         $model = Odd_france_ligue_1::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 62)   
                    { 
                         $model = Odd_france_ligue_2::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 63)   
                    { 
                         $model = Odd_france_national::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 66)   
                    { 
                        $pra_model = array();

                         $model = Odd_france_coupe_de_france::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [6])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();  
                    }
                    /*

                // germany
                    elseif($league == 78)   
                    { 
                         $model = Odd_germany_bundesliga_1::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 79)   
                    { 
                         $model = Odd_germany_bundesliga_2::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 80)   
                    { 
                         $model = Odd_germany_liga_3::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // netherlands
                    elseif($league == 88)   
                    { 
                         $model = Odd_netherlands_eredivisie::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 89)   
                    { 
                         $model = Odd_netherlands_eerste_divisie::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 90)   
                    { 
                        $pra_model = array();

                         $model = Odd_netherlands_knvb_beker::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [9])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 
                    }
                    /*

                // Portugal
                    elseif($league == 94)   
                    { 
                         $model = Odd_portugal_primiera_liga::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 95)   
                    { 
                        $pra_model = array();

                         $model = Odd_portugal_liga_de_honra::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [13,15])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 
                    }
                    /*

                // polan
                    elseif($league == 106)   
                    { 
                         $model = Odd_poland_ekstraklasa::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Italy
                    elseif($league == 135)   
                    { 
                         $model = odd_italy_serie_a::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 136)   
                    { 
                         $model = odd_italy_serie_b::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 137)   
                    { 
                        $pra_model = array();

                         $model = Odd_italy_coppa_italia::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [8,8.5])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->get();
                    }
                    elseif($league == 138)   
                    { 

                        $pra_model = array();

                         $model = odd_italy_serie_c::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [6])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->get();
                    }
                    /*
                // spain
                    elseif($league == 140)   
                    { 
                         $model = Odd_spain_la_liga::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 141)   
                    { 
                         $model = Odd_spain_segunda_division::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 143)   
                    { 

                        $pra_model = array();

                         $model = Odd_spain_copa_del_rey::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [10,8.5])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get();  
                    }
                    /*

                // Belgium
                    elseif($league == 144)   
                    { 
                         $model = odd_belgium_jupiler_pro::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 145)   
                    { 
                         $model = odd_belgium_2e_klasse::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Scotland
                    elseif($league == 179)   
                    { 
                         $model = Odd_scotland_premiership::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 180)   
                    { 
                         $model = Odd_scotland_championship::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 184)   
                    { 
                         $model = Odd_scotland_league_two::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Scotland
                    elseif($league == 188)   
                    { 
                         $model = Odd_australia_a_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */

                // 
                    elseif($league == 197)   
                    { 
                        $pra_model = array();

                         $model = Odd_greece_super_league::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [7.5,7,8])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->get();
                    }
/*
                // Turkey
                    elseif($league == 203)   
                    { 
                         $model = Odd_turkey_super_lig::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 204)   
                    { 
                         $model = Odd_turkey_tff_1_lig::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [9,11])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 
                    }
                    elseif($league == 206)   
                    { 
                        $pra_model = array();

                         $model = Odd_turkey_cup::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [15,14])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 
                    }
/*
                // Switzerland
                    elseif($league == 207)   
                    { 
                         $model = Odd_switzerland_super_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    elseif($league == 208)   
                    { 
                         $model = Odd_switzerland_challenge_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
                    */
                    elseif($league == 209)   
                    { 
                        $pra_model = array();

                         $model = Odd_switzerland_schweizer_pokal::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [9,8.5])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 
                    }
                    /*

                // croatia
                    elseif($league == 210)   
                    { 
                         $model = odd_croatia_prva_hnl::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Indonesia
                    elseif($league == 274)   
                    { 
                         $model = Odd_indonesia_super_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }
*/
                // Romania
                    elseif($league == 283)   
                    { 

                        // $pra_model = array();
                         $pra_model = Odd_romania_liga_1::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [5.5,6])
                                                            ->whereIn('bookmakersapi_id', [15])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 

                         $model = Odd_romania_liga_1::select(
                                                                'bookmakers_bets_values_odd',
                                                                'bookmakers_bets_values_value',
                                                                DB::raw('COUNT(*) as count')
                                                            ) 
                                                            ->where('leagueapi_id', '=', $league)
                                                            ->where('fixtureapi_id', '=', $fixture)
                                                            ->where('bookmakers_betsapi_id', '=', 10)
                                                            ->whereIn('bookmakers_bets_values_odd', [5.5,6])
                                                            ->groupby('bookmakers_bets_values_odd', 'bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_value')
                                                            ->orderby('bookmakers_bets_values_odd')
                                                            ->get(); 

                    }
/*
                // qatar
                    elseif($league == 305)   
                    { 
                         $model = Odd_qatar_stars_league::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }


                // czech
                    elseif($league == 347)   
                    { 
                         $model = Odd_czech_republic_cup::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count(); 
                    }

                // Northen Ireland 
                    elseif($league == 408)   
                    { 
                         $model = Odd_northern_ireland_premiership::whereNull('exact_score')
                                                                    ->where('bookmakers_betsapi_id', '=', 10)
                                                                    ->count();  
                    }
                    */


            // ----------------------------------------------------------- Action  
                $isi .= '<table class="table">';
                foreach ($pra_model as $row) 
                {
                    $isi .= '<tr class="text-warning">';
                        $isi .= '<td>';
                            $isi .= $row->bookmakers_bets_values_odd;
                        $isi .= '</td>';
                        $isi .= '<td>';
                            $isi .= $row->bookmakers_bets_values_value;
                        $isi .= '</td>';
                        $isi .= '<td>';
                            $isi .= $row->count;
                        $isi .= '</td>';
                    $isi .= '</tr>';
                 } 
                foreach ($model as $row) 
                {
                    $isi .= '<tr>';
                        $isi .= '<td>';
                            $isi .= $row->bookmakers_bets_values_odd;
                        $isi .= '</td>';
                        $isi .= '<td>';
                            $isi .= $row->bookmakers_bets_values_value;
                        $isi .= '</td>';
                        $isi .= '<td>';
                            $isi .= $row->count;
                        $isi .= '</td>';
                    $isi .= '</tr>';
                 } 
                $isi .= '</table>';
            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }