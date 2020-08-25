<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner_model extends CI_Model
{

    function get_all_kuesioner($offset, $limit)
    {
        $query = $this->db->get('tbl_kuesioner', $offset, $limit);
        return $query;
    }

    function get_total_responden()
    {
        $this->db->select('kuesioner_responden')
            ->from('tbl_kuesioner');
        return $this->db->count_all_results();
    }

    // Kuesioner A Pertanyaan 1

    function get_sangatsetuju_kuesionerAp1()
    {
        $this->db->select('kuesioner_A_p1')
            ->from('tbl_kuesioner')
            ->where('kuesioner_A_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerAp1()
    {
        $this->db->select('kuesioner_A_p1')
            ->from('tbl_kuesioner')
            ->where('kuesioner_A_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerAp1()
    {
        $this->db->select('kuesioner_A_p1')
            ->from('tbl_kuesioner')
            ->where('kuesioner_A_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerAp1()
    {
        $this->db->select('kuesioner_A_p1')
            ->from('tbl_kuesioner')
            ->where('kuesioner_A_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner B Pertanyaan 1

    function get_sangatsetuju_kuesionerBp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_B_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerBp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_B_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerBp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_B_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerBp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_B_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner C Pertanyaan 1

    function get_sangatsetuju_kuesionerCp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_C_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerCp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_C_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerCp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_C_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerCp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_C_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner D Pertanyaan 1

    function get_sangatsetuju_kuesionerDp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_D_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerDp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_D_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerDp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_D_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerDp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_D_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner E Pertanyaan 1

    function get_sangatsetuju_kuesionerEp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_E_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerEp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_E_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerEp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_E_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerEp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_E_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner F Pertanyaan 1

    function get_sangatsetuju_kuesionerFp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_F_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerFp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_F_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerFp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_F_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerFp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_F_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner G Pertanyaan 1

    function get_sangatsetuju_kuesionerGp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_G_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerGp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_G_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerGp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_G_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerGp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_G_p1', 1);
        return $this->db->count_all_results();
    }

    // // Kuesioner G Pertanyaan 2

    // function get_sangatsetuju_kuesionerGp2()
    // {
    //     $this->db->select('*')
    //         ->from('tbl_kuesioner')
    //         ->where('kuesioner_G_p2', 4);
    //     return $this->db->count_all_results();
    // }

    // function get_setuju_kuesionerGp2()
    // {
    //     $this->db->select('*')
    //         ->from('tbl_kuesioner')
    //         ->where('kuesioner_G_p2', 3);
    //     return $this->db->count_all_results();
    // }

    // function get_tidaksetuju_kuesionerGp2()
    // {
    //     $this->db->select('*')
    //         ->from('tbl_kuesioner')
    //         ->where('kuesioner_G_p2', 2);
    //     return $this->db->count_all_results();
    // }

    // function get_sangattidaksetuju_kuesionerGp2()
    // {
    //     $this->db->select('*')
    //         ->from('tbl_kuesioner')
    //         ->where('kuesioner_G_p2', 1);
    //     return $this->db->count_all_results();
    // }

    // Kuesioner H Pertanyaan 1

    function get_sangatsetuju_kuesionerHp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_H_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerHp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_H_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerHp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_H_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerHp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_H_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner I Pertanyaan 1

    function get_sangatsetuju_kuesionerIp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerIp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerIp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerIp1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner I Pertanyaan 2

    function get_sangatsetuju_kuesionerIp2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p2', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesionerIp2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p2', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesionerIp2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p2', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesionerIp2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner')
            ->where('kuesioner_I_p2', 1);
        return $this->db->count_all_results();
    }




    // KUESIONER PELAYANAN //



    // Kuesioner 1 Pertanyaan 1

    function get_total_responden_1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p1')
            ->where('kuesioner_1_p1 !=', 0);
        return $this->db->count_all_results();
    }

    function get_sangatsetuju_kuesioner1p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p1')
            ->where('kuesioner_1_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner1p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p1')
            ->where('kuesioner_1_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner1p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p1')
            ->where('kuesioner_1_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner1p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p1')
            ->where('kuesioner_1_p1', 1);
        return $this->db->count_all_results();
    }


    // Kuesioner 2 Pertanyaan 1
    function get_total_responden_2_1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_1')
            ->where('kuesioner_2_p1 !=', 0);
        return $this->db->count_all_results();
    }

    function get_sangatsetuju_kuesioner2p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_1')
            ->where('kuesioner_2_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner2p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_1')
            ->where('kuesioner_2_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner2p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_1')
            ->where('kuesioner_2_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner2p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_1')
            ->where('kuesioner_2_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 2 Pertanyaan 2
    function get_total_responden_2_2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_2')
            ->where('kuesioner_2_p2 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner2p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_2')
            ->where('kuesioner_2_p2', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner2p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_2')
            ->where('kuesioner_2_p2', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner2p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_2')
            ->where('kuesioner_2_p2', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner2p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p2_2')
            ->where('kuesioner_2_p2', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 3 Pertanyaan 1
    function get_total_responden_3_1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_1')
            ->where('kuesioner_3_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner3p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_1')
            ->where('kuesioner_3_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner3p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_1')
            ->where('kuesioner_3_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner3p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_1')
            ->where('kuesioner_3_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner3p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_1')
            ->where('kuesioner_3_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 3 Pertanyaan 2
    function get_total_responden_3_2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_2')
            ->where('kuesioner_3_p2 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner3p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_2')
            ->where('kuesioner_3_p2', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner3p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_2')
            ->where('kuesioner_3_p2', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner3p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_2')
            ->where('kuesioner_3_p2', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner3p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner1p3_2')
            ->where('kuesioner_3_p2', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 4 Pertanyaan 1
    function get_total_responden_4_1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p1')
            ->where('kuesioner_4_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner4p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p1')
            ->where('kuesioner_4_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner4p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p1')
            ->where('kuesioner_4_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner4p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p1')
            ->where('kuesioner_4_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner4p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p1')
            ->where('kuesioner_4_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 4 Pertanyaan 2
    function get_total_responden_4_2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p2')
            ->where('kuesioner_4_p2 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner4p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p2')
            ->where('kuesioner_4_p2', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner4p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p2')
            ->where('kuesioner_4_p2', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner4p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p2')
            ->where('kuesioner_4_p2', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner4p2()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner2p2')
            ->where('kuesioner_4_p2', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 5 Pertanyaan 1
    function get_total_responden_5()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner3')
            ->where('kuesioner_5_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner5p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner3')
            ->where('kuesioner_5_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner5p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner3')
            ->where('kuesioner_5_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner5p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner3')
            ->where('kuesioner_5_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner5p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner3')
            ->where('kuesioner_5_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 6 Pertanyaan 1
    function get_total_responden_6()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner4')
            ->where('kuesioner_6_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner6p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner4')
            ->where('kuesioner_6_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner6p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner4')
            ->where('kuesioner_6_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner6p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner4')
            ->where('kuesioner_6_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner6p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner4')
            ->where('kuesioner_6_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 7 Pertanyaan 1
    function get_total_responden_7()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner5')
            ->where('kuesioner_7_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner7p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner5')
            ->where('kuesioner_7_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner7p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner5')
            ->where('kuesioner_7_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner7p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner5')
            ->where('kuesioner_7_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner7p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner5')
            ->where('kuesioner_7_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 8 Pertanyaan 1
    function get_total_responden_8()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner6')
            ->where('kuesioner_8_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner8p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner6')
            ->where('kuesioner_8_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner8p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner6')
            ->where('kuesioner_8_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner8p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner6')
            ->where('kuesioner_8_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner8p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner6')
            ->where('kuesioner_8_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 9 Pertanyaan 1
    function get_total_responden_9()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner7')
            ->where('kuesioner_9_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner9p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner7')
            ->where('kuesioner_9_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner9p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner7')
            ->where('kuesioner_9_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner9p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner7')
            ->where('kuesioner_9_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner9p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner7')
            ->where('kuesioner_9_p1', 1);
        return $this->db->count_all_results();
    }

    // Kuesioner 10 Pertanyaan 1
    function get_total_responden_10()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner8')
            ->where('kuesioner_10_p1 !=', 0);
        return $this->db->count_all_results();
    }
    function get_sangatsetuju_kuesioner10p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner8')
            ->where('kuesioner_10_p1', 4);
        return $this->db->count_all_results();
    }

    function get_setuju_kuesioner10p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner8')
            ->where('kuesioner_10_p1', 3);
        return $this->db->count_all_results();
    }

    function get_tidaksetuju_kuesioner10p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner8')
            ->where('kuesioner_10_p1', 2);
        return $this->db->count_all_results();
    }

    function get_sangattidaksetuju_kuesioner10p1()
    {
        $this->db->select('*')
            ->from('tbl_kuesioner8')
            ->where('kuesioner_10_p1', 1);
        return $this->db->count_all_results();
    }



    // function get_kuesioner_by_id($kuesioner_id)
    // {
    //     $query = $this->db->get_where('tbl_kuesioner', array('kuesioner_id' => $kuesioner_id));
    //     return $query;
    // }

    // function search_kuesioner($keyword)
    // {
    //     $this->db->like('kuesioner_name', $keyword);
    //     $this->db->or_like('kuesioner_subject', $keyword);
    //     $query = $this->db->get('tbl_kuesioner');
    //     return $query;
    // }

    // function update_status_by_id($kuesioner_id)
    // {
    //     $data = array(
    //         'kuesioner_status' => 1
    //     );
    //     $this->db->where('kuesioner_id', $kuesioner_id);
    //     $this->db->update('tbl_kuesioner', $data);
    // }

    // function delete_kuesioner($kuesioner_id)
    // {
    //     $this->db->where('kuesioner_id', $kuesioner_id);
    //     $this->db->delete('tbl_kuesioner');
    // }
}
