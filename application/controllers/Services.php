<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{


	public function index()
	{
		$data['title'] = "BDSLegalserv";
		$data['main_content'] = "pages/business-op";
		$this->load->view('includes/template', $data);
	}

	public function iso_certification()
	{
		$data['title'] = "ISO CERTIFICATION";
		$data['main_content'] = "pages/iso_certification";
		$this->load->view('includes/template', $data);
	}

	public function fssai_basic()
	{
		$data['title'] = "FSSAI BASIC";
		$data['main_content'] = "pages/fssai_basic";
		$this->load->view('includes/template', $data);
	}

	public function fssai_state()
	{
		$data['title'] = "FSSAI STATE";
		$data['main_content'] = "pages/fssai_state";
		$this->load->view('includes/template', $data);
	}

	public function fssai_central()
	{
		$data['title'] = "FSSAI CENTRAL";
		$data['main_content'] = "pages/fssai_central";
		$this->load->view('includes/template', $data);
	}


	public function import_export()
	{
		$data['title'] = "IMPORT EXPORT CODE REGISTRATION";
		$data['main_content'] = "pages/import_export";
		$this->load->view('includes/template', $data);
	}

	public function msme()
	{
		$data['title'] = "MICRO,SMALL AND MEDIUM ENTERPRISES";
		$data['main_content'] = "pages/msme";
		$this->load->view('includes/template', $data);
	}

	public function llp()
	{
		$data['title'] = "Limited Liability Partnership";
		$data['main_content'] = "pages/llp";
		$this->load->view('includes/template', $data);
	}

	public function opc()
	{
		$data['title'] = "One Person Company";
		$data['main_content'] = "pages/opc";
		$this->load->view('includes/template', $data);
	}

	public function private_limited_company()
	{
		$data['title'] = "PRIVATE LIMIED COMPANY";
		$data['main_content'] = "pages/private_limited_company";
		$this->load->view('includes/template', $data);
	}

	public function roc()
	{
		$data['title'] = "ROC Compliance";
		$data['main_content'] = "pages/roc";
		$this->load->view('includes/template', $data);
	}

	public function trust_registration()
	{
		$data['title'] = "Trust Registration";
		$data['main_content'] = "pages/trust_registration";
		$this->load->view('includes/template', $data);
	}

	public function partnership_firm_registration()
	{
		$data['title'] = "Trust Registration";
		$data['main_content'] = "pages/partnership_firm_registration";
		$this->load->view('includes/template', $data);
	}

	public function company_annual_filing()
	{
		$data['title'] = "Trust Registration";
		$data['main_content'] = "pages/company_annual_filing";
		$this->load->view('includes/template', $data);
	}

	public function patent()
	{
		$data['title'] = "Patent";
		$data['main_content'] = "pages/patent";
		$this->load->view('includes/template', $data);
	}

	public function trademark()
	{
		$data['title'] = "Trademark & Service Marks";
		$data['main_content'] = "pages/trademark_service_marks";
		$this->load->view('includes/template', $data);
	}

	public function copyright()
	{
		$data['title'] = "Copyright";
		$data['main_content'] = "pages/copyright";
		$this->load->view('includes/template', $data);
	}

	public function design_registration()
	{
		$data['title'] = "Copyright";
		$data['main_content'] = "pages/design_registration";
		$this->load->view('includes/template', $data);
	}

	public function trade_secrets()
	{
		$data['title'] = "Trade Secrets";
		$data['main_content'] = "pages/trade_secrets";
		$this->load->view('includes/template', $data);
	}

	public function drafting_legal_documents()
	{
		$data['title'] = "Trade Secrets";
		$data['main_content'] = "pages/drafting_legal_documents";
		$this->load->view('includes/template', $data);
	}

	public function barcode_registration()
	{
		$data['title'] = "Trade Secrets";
		$data['main_content'] = "pages/barcode_registration";
		$this->load->view('includes/template', $data);
	}


	public function shop_establishment_license_registration()
	{
		$data['title'] = "Trade Secrets";
		$data['main_content'] = "pages/shop_establishment_license_registration";
		$this->load->view('includes/template', $data);
	}

	public function gst_return()
	{
		$data['title'] = "GST RETURN";
		$data['main_content'] = "pages/gst_return";
		$this->load->view('includes/template', $data);
	}

	public function itr()
	{
		$data['title'] = "ITR";
		$data['main_content'] = "pages/it_return";
		$this->load->view('includes/template', $data);
	}


	public function filing_itr()
	{
		$data['title'] = "FILING OF ITR";
		$data['main_content'] = "pages/filing_itr";
		$this->load->view('includes/template', $data);
	}

	public function twelveA_certificate()
	{
		$data['title'] = "FILING OF ITR";
		$data['main_content'] = "pages/twelveA_certificate";
		$this->load->view('includes/template', $data);
	}
}
