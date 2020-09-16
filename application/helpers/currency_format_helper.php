<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /*
    Source Code by : Aldy Muldani
    Email : dieabra@gmail.com
    Github : https://github.com/alldie1207
    Line : alldie1207
    */

    // =============================================================
    // =============================================================

    function build_menu() {
        global $CI;
        $data = '';

        $id['orders'] = 1;
        $data_kategori_dokumen = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);
        foreach ($data_kategori_dokumen as $row) {
          if ($row->has_child == "No") {
              $data.= '
                  <li><a href="'.base_url('Dokumen/index/'.$row->id_kategori_dokumen).'">'.$row->nm_kategori_dokumen.'</a></li>
              ';
          } else {
              $data.= '
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">'.$row->nm_kategori_dokumen.' <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      '.build_child_menu($row->id_kategori_dokumen).'
                    </ul>
                </li>
              ';
          }

        }

        return $data;
    }

    function build_child_menu($id_kategori_dokumen) {
        global $CI;
        $data = '';

        $id['parrent'] = $id_kategori_dokumen;
        $data_kategori_dokumen = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);
        foreach ($data_kategori_dokumen as $row) {
          if ($row->has_child == "No") {
              $data.= '
                <li><a href="'.base_url('Dokumen/index/'.$row->id_kategori_dokumen).'">'.$row->nm_kategori_dokumen.'</a></li>
              ';
          } else {
              $data.= '
                <li class="dropdown-submenu">
                  <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">'.$row->nm_kategori_dokumen.'</a>
                  <ul class="dropdown-menu">
                    '.build_grand_child_menu($row->id_kategori_dokumen).'
                  </ul> 
                </li>

              ';
          }

        }

        return $data;
    }

    function build_grand_child_menu($id_kategori_dokumen) {
        global $CI;
        $data = '';

        $id['parrent'] = $id_kategori_dokumen;
        $data_kategori_dokumen = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);
        foreach ($data_kategori_dokumen as $row) {
            $data.= '
                  <li><a href="'.base_url('Dokumen/index/'.$row->id_kategori_dokumen).'">'.$row->nm_kategori_dokumen.'</a></li>
            ';

        }

        return $data;
    }

    // =============================================================
    // =============================================================

    function orders_($order) {
      global $CI;
      switch ($order) {
        case 1:
          $data = "---";
          break;

        case 2:
          $data = "--";
          break;

        case 3:
          $data = "-";
          break;

      }

      return $data;
    }

    function option_value_dokumen($id_kategori_dokumen) {
      global $CI;
      $data = '';
      $has_child = has_child($id_kategori_dokumen);
      $orders = orders($id_kategori_dokumen);
      $nm_kategori_dokumen = nm_kategori_dokumen($id_kategori_dokumen);

      if ($has_child == 'No') {
        $data = '
          <option value="'.$id_kategori_dokumen.'">
            '.orders_($orders).' '.$nm_kategori_dokumen.'
          </option>
        ';
      }

      return $data;
    }


    function option_value($id_kategori_dokumen) {
      global $CI;
      $data = '';
      $has_child = has_child($id_kategori_dokumen);
      $orders = orders($id_kategori_dokumen);
      $nm_kategori_dokumen = nm_kategori_dokumen($id_kategori_dokumen);

      if ($has_child == 'Yes') {
        $data = '
          <option value="'.$id_kategori_dokumen.'" disabled>
            '.orders_($orders).' '.$nm_kategori_dokumen.'
          </option>
        ';
        $data.= option_value_enabled($id_kategori_dokumen);
      } 

      return $data;
    }

    function option_value_enabled($id_kategori_dokumen) {
      global $CI;
      $data = '';
      $has_child = has_child($id_kategori_dokumen);
      $orders = orders($id_kategori_dokumen);
      $nm_kategori_dokumen = nm_kategori_dokumen($id_kategori_dokumen);


      $id['parrent'] = $id_kategori_dokumen;
      $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);
      foreach ($data as $row) {
        if ($row->has_child == 'No') {
          $data.= '
            <option value="'.$id_kategori_dokumen.'">
              '.orders_($orders).' '.$nm_kategori_dokumen.'
            </option>
          ';
        }
      }
      return $data;
    }

    function has_child($id_kategori_dokumen) {
      global $CI;

      $id['id_kategori_dokumen'] = $id_kategori_dokumen;
      $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);

      foreach ($data as $row) {
        $data = $row->has_child;
      }

      return $data;
    }


    function orders($id_kategori_dokumen) {
      global $CI;

      $id['id_kategori_dokumen'] = $id_kategori_dokumen;
      $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);

      foreach ($data as $row) {
        $data = $row->orders;
      }

      return $data;
    }

    function nm_kategori_dokumen($id_kategori_dokumen) {
      global $CI;

      $id['id_kategori_dokumen'] = $id_kategori_dokumen;
      $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);

      foreach ($data as $row) {
        $data = $row->nm_kategori_dokumen;
      }

      return $data;
    } 

    function parrent($id_kategori_dokumen) {
      global $CI;

      $id['id_kategori_dokumen'] = $id_kategori_dokumen;
      $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);

      foreach ($data as $row) {
        $data = $row->parrent;
      }
      if ($data != 'Root') {
        $data = nm_kategori_dokumen($data);
      }
      return $data;
    } 

    function cek_orders($id_parrent) {
      global $CI;

      if ($id_parrent == "Root") {
        $data = 1;
      } else {
        $id['id_kategori_dokumen'] = $id_parrent;
        $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);

        foreach ($data as $row) {
          $id_kategori_dokumen = $row->id_kategori_dokumen;
          $data = $row->orders+1;
        }
        $order = $data;
        chage_child($id_kategori_dokumen, $order);
      }

      return $data;
    }

    function chage_child($id_kategori_dokumen, $order) {
      global $CI;
      if ($order > 3) {
        redirect('dokumenc/manage_data_kategori_dokumen');
      }
      $id['id_kategori_dokumen'] = $id_kategori_dokumen;
      $data=array(
          'has_child'=>'Yes',
      );
      $CI->Adminm->updateData('tbl_kategori_dokumen',$data,$id);
    }

    function parrent_desc($id_parrent) {
      global $CI;

      if ($id_parrent == "Root") {
        $data = "Root";
      } else {
        $id['id_kategori_dokumen'] = $id_parrent;
        $data = $CI->Adminm->getSelectedData('tbl_kategori_dokumen',$id);

        foreach ($data as $row) {
          $data = $row->nm_kategori_dokumen;
        }

      }

      return $data;
    }


    function convert_month($month) {
        global $CI;

        switch ($month) {
          case '01':
            $bulan = 'Januari';
            break;
          case '02':
            $bulan = 'Febuari';
            break;
          case '03':
            $bulan = 'Maret';
            break;
          case '04':
            $bulan = 'April';
            break;
          case '05':
            $bulan = 'Mei';
            break;
          case '06':
            $bulan = 'Juni';
            break;
          case '07':
            $bulan = 'Juli';
            break;
          case '08':
            $bulan = 'Agustus';
            break;
          case '09':
            $bulan = 'September';
            break;
          case '10':
            $bulan = 'Oktober';
            break;
          case '11':
            $bulan = 'November';
            break;
          case '12':
            $bulan = 'Desember';
            break;
          case '13':
            $bulan = 'Januari';
            break;
        }

        return $bulan; //print tanggal
    }


    function config_web($key_value) {
      global $CI;

        $id['config_id'] = 1;
        $data = $CI->Adminm->getSelectedData('tbl_config',$id);

        foreach ($data as $row) {
          $data = $row->$key_value;
        }

      return $data;
    }

    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }    