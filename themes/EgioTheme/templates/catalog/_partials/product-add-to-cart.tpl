{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<div class="product-add-to-cart js-product-add-to-cart">
  {if !$configuration.is_catalog}
    <span class="control-label">{l s='Quantity' d='Shop.Theme.Catalog'}</span>

    {block name='product_quantity'}
      <div class="product-quantity clearfix">
        <div class="qty">
          <input type="number" name="qty" id="quantity_wanted" inputmode="numeric" pattern="[0-9]*"
            {if $product.quantity_wanted} value="{$product.quantity_wanted}" min="{$product.minimal_quantity}" 
            {else}
            value="1" min="1" {/if} class="input-group" aria-label="{l s='Quantity' d='Shop.Theme.Actions'}">
        </div>

        <div class="add">
          <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit"
            {if !$product.add_to_cart_url} disabled {/if}>
            <i class="material-icons shopping-cart">&#xE547;</i>
            {l s='Add to cart' d='Shop.Theme.Actions'}
          </button>
          <div class="heart-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
        </svg>
          </div>
        </div>

        {hook h='displayProductActions' product=$product}
      </div>
    {/block}


    {block name='product_minimal_quantity'}
      <p class="product-minimal-quantity js-product-minimal-quantity">
        {if $product.minimal_quantity > 1}
          {l
                s='The minimum purchase order quantity for the product is %quantity%.'
                d='Shop.Theme.Checkout'
                sprintf=['%quantity%' => $product.minimal_quantity]
                }
        {/if}
      </p>
    {/block}
  {/if}
</div>