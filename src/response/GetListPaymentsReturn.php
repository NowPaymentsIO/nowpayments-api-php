<?php


namespace Nowpayments\Template\Response;

class GetListPaymentsReturn
{
    private $data = [];
    private $limit;
    private $page;
    private $pagesCount;
    private $total;

    /**
     * GetListPaymentsReturn constructor.
     */
    public function __construct(int $limit, int $page, int $pagesCount, int $total)
    {
        $this->data = [];
        $this->limit = $limit;
        $this->page = $page;
        $this->pagesCount = $pagesCount;
        $this->total = $total;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ListPaymentItem $invoice
     */
    public function pushInvoice(ListPaymentItem $invoice): void
    {
        array_push($this->data, $invoice);
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getPagesCount()
    {
        return $this->pagesCount;
    }

    /**
     * @param mixed $pagesCount
     */
    public function setPagesCount($pagesCount): void
    {
        $this->pagesCount = $pagesCount;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }


}