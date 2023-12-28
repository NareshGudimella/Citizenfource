<?php 
namespace App\Controllers;


class Demo extends BaseController{
    public function index(){
        return view("view");
    }
}
 





$rules = [
    'name' => 'required|min_length[3]|max_length[20]',
    'email' => 'required|valid_email',
    'cemail' => 'required|matches[email]',
    'hno' => 'required|min_length[3]',
    'street' => 'required|min_length[3]',
    'area' => 'required|min_length[3]',
    'ward' => 'required',
    'apname' => 'required|min_length[3]',
    'ctv' => 'required|min_length[3]',
    'state' => 'required',
    'district' => 'required|min_length[3]',
    'pincode' => 'required|exact_length[6]|numeric',
    'religion' => 'required',
    'caste' => 'required|min_length[3]',
    'category' => 'required',
    'uphoto'=>'uploaded[uphoto]|max_size[uphoto,1024]|ext_in[uphoto,png,jpg,gif,jpeg]',
    'uresume'=>'uploaded[uresume]|max_size[uresume,1024]|ext_in[uresume,png,jpg,gif,jpeg]',
];









$picturefile = $this->request->getFile('uphoto');
$Resumefile = $this->request->getFile('uresume');
if ($picturefile->isValid() && !$picturefile->hasMoved()) {
    if ($picturefile->move(WRITEPATH . 'uploads\public', $picturefile->getRandomName())) {

        $path1 = '/uploads/public/' . $picturefile->getName();
       
    }
}
if ($Resumefile->isValid() && !$Resumefile->hasMoved()) {
    if ($Resumefile->move(WRITEPATH . 'uploads\public', $Resumefile->getRandomName())) {

        $path2 = '/uploads/public/' . $Resumefile->getName();
    }
    
}
$data = [
    'name' => $this->request->getVar('name'),
    'email' => $this->request->getVar('email'),
    'houseno' => $this->request->getVar('hno'),
    'street' => $this->request->getVar('street'),
    'area' => $this->request->getVar('area'),
    'ward' => $this->request->getVar('ward'),
    'Appartment-name' => $this->request->getVar('apname'),
    'city' => $this->request->getVar('ctv'),
    'state' => $this->request->getVar('state'),
    'district' => $this->request->getVar('district'),
    'pincode' => $this->request->getVar('pincode'),
    'religion' => $this->request->getVar('Religion'),
    'caste' => $this->request->getVar('caste'),
    'category' => $this->request->getVar('Category'),
    'referenceinfo' => $this->request->getVar('ucontact'),
    'picture' => $path1,
    
    'Resume' => $path2,

];
$status= $this->cmodel->savedata($data);
if($status){
echo "data inserted in db";
}
else{
echo "no data found";
}














$rules = [
    'name' => 'required|min_length[3]|max_length[20]',
    'email' => 'required|valid_email',
    'cemail' => 'required|matches[email]',
    'hno' => 'required|min_length[3]',
    'street' => 'required|min_length[3]',
    'area' => 'required|min_length[3]',
    'ward' => 'required',
    'apname' => 'required|min_length[3]',
    'ctv' => 'required|min_length[3]',
    'state' => 'required',
    'district' => 'required|min_length[3]',
    'pincode' => 'required|exact_length[6]|numeric',
    'religion' => 'required',
    'caste' => 'required|min_length[3]',
    'category' => 'required',
    'uphoto'=>'uploaded[uphoto]|max_size[uphoto,1024]|ext_in[uphoto,png,jpg,gif,jpeg]',
    'uresume'=>'uploaded[uresume]|max_size[uresume,1024]|ext_in[uresume,png,jpg,gif,jpeg]',
];
if($this->validate($rules))
{
   
}
else{
    $data['validation'] = $this->validator;
}