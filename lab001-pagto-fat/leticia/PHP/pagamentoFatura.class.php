<?php
/**
 * Class PagamentoFatura
 */
class PagamentoFatura {

    public $dataVencimento;
    public $arrDtVenc;
    public $somaDtVenc;
    public $dataPagamento;
    public $arrDtPag;
    public $somaDtPag;
    public $status;

    /**
     * Seta a data como uma array e soma os seus valores
     */
    public function SomarDatas() {

        # DATA DO PAGAMENTO
        $this->arrDtPag  = explode("/", $this->dataPagamento);
        $this->somaDtPag = (int) $this->arrDtPag[0] + (int) $this->arrDtPag[1] + (int) $this->arrDtPag[2];

        # DATA DO VENCIMENTO
        $this->arrDtVenc  = explode("/", $this->dataVencimento);
        $this->somaDtVenc = (int) $this->arrDtVenc[0] + (int) $this->arrDtVenc[1] + (int) $this->arrDtVenc[2];
    }

    /**
     * Setando o Status do pagamento
     */
    public function StatusPagamento() {

        if ($this->somaDtPag == $this->somaDtVenc) {
            
            $status = "Pagto feito em dia";
            
        } elseif ($this->somaDtPag > $this->somaDtVenc) {

            $subtDts = ($this->somaDtPag - $this->somaDtVenc);
            if ($subtDts === 5) {
                $status = "Pagto feito com atraso de 5 dias";
            } else {
                if ($this->arrDtVenc[1] < $this->arrDtPag[1]) {
                    $status = "Pagto feito com atraso de 30 dias";
                } else {
                    $status = "Pagto feito com atraso de 1 dia";
                }
            }
        }
        $this->status = $status;
    }
}
?>