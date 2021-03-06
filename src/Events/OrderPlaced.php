<?php

namespace BaklySystems\LaravelShop\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Event fired when an order is placed.
 *
 * @author Alejandro Mostajo
 * @copyright BaklySystems, LLC
 * @license MIT
 * @package BaklySystems\LaravelShop
 */
class OrderPlaced
{
	use SerializesModels;

	/**
     * Order ID.
     * @var int
     */
	public $id;

	/**
     * Create a new event instance.
     *
     * @param int $id Order ID.
     *
     * @return void
     */
	public function __construct($id)
	{
		$this->id = $id;
	}
}