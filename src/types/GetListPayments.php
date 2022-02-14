<?php


namespace Nowpayments\Template\Response;

use MyException;

class GetListPayments
{
    private const NOT_SET_INT_VALUE = 2147483647;

    private $limit = self::NOT_SET_INT_VALUE;
    private $page = self::NOT_SET_INT_VALUE;

    public const SORT_BY_FIELDS = ["payment_id", "payment_status", "pay_address", "price_amount", "price_currency",
        "pay_amount", "actually_paid", "pay_currency",
        "order_id", "order_description", "purchase_id", "outcome_amount", "outcome_currency",
    ];

    private $sortBy = "";
    private $orderBy = "";
    private $dateFrom = "";
    private $dateTo = "";

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @throws MyException
     */
    public function setLimit(int $limit): void
    {
        if ($limit < 1 || $limit > 500) {
            throw new MyException("Valid limit range [1: 500]. Current " . $limit);
        }
        $this->limit = $limit;
    }

    /**
     * @return bool
     */
    public function isSetLimit(): bool
    {
        return $this->limit !== self::NOT_SET_INT_VALUE;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @throws MyException
     */
    public function setPage(int $page): void
    {
        if ($page < 0) {
            throw new MyException("Invalid page value");
        }
        $this->page = $page;
    }

    /**
     * @return bool
     */
    public function isSetPage(): bool
    {
        return $this->page !== self::NOT_SET_INT_VALUE;
    }

    /**
     * @return string
     */
    public function getSortBy(): string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     * @throws MyException
     */
    public function setSortBy(string $sortBy): void
    {
        if (!in_array($sortBy, self::SORT_BY_FIELDS)) {
            throw new MyException("Invalid sort fields. Valid sort fields payment_id, payment_status, pay_address, price_amount, price_currency, pay_amount, actually_paid, pay_currency, order_id, order_description, purchase_id, outcome_amount, outcome_currency");
        }
        $this->sortBy = $sortBy;
    }

    /**
     * @return bool
     */
    public function isSetSortBy(): bool
    {
        return strlen($this->sortBy) !== 0;
    }

    /**
     * @return string
     */
    public function getOrderBy(): string
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     * @throws MyException
     */
    public function setOrderBy(string $orderBy): void
    {
        if ($orderBy !== "asc" && $orderBy !== "desc") {
            throw new MyException("Invalid order by fields. Valid value asc, desc");
        }

        $this->orderBy = $orderBy;
    }

    /**
     * @return bool
     */
    public function isSetOrderBy(): bool
    {
        return strlen($this->sortBy) !== 0;
    }

    /**
     * @return string
     */
    public function getDateFrom(): string
    {
        return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     */
    public function setDateFrom(string $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return bool
     */
    public function isSetDateFrom(): bool
    {
        return strlen($this->sortBy) !== 0;
    }

    /**
     * @return string
     */
    public function getDateTo(): string
    {
        return $this->dateTo;
    }

    /**
     * @param string $dateTo
     */
    public function setDateTo(string $dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    /**
     * @return bool
     */
    public function isSetDateTo(): bool
    {
        return strlen($this->sortBy) !== 0;
    }
}