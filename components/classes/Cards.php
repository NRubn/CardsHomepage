<?php

class Cards {

	public function render($fronthtml, $backhtml, $frontbackgroundurl = '', $backbackgroundurl = '', $link = 'home', $cssclass = ''){

		$front_backgroundinstyle = ($frontbackgroundurl !== '') ? 'background-image:url('.$frontbackgroundurl.')' : '';
		$back_backgroundinstyle = ($backbackgroundurl !== '') ? 'background-image:url('.$backbackgroundurl.')' : '';

		$data_page_name = 'data-page-name="'.$link.'"';
			$html = '';
			$html .= '<div class="card-container '.$cssclass.'">';
					$html .= '<div class="card">';
					$html .= '<div class="card-front" style="'.$front_backgroundinstyle.'">';
						$html .= $fronthtml;	
					$html .= '</div>';
					$html .= '<div class="card-back" style="'.$back_backgroundinstyle.'" '.$data_page_name.'>';
						$html .= $backhtml;	
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</div>';
			return $html;
	}

}