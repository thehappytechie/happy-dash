@section('title', 'Dashboard')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Dashboard</h1>
    </div>
    <div class="grid gap-sm">
        <!-- alert -->
        <div class="alert-card bg radius-md padding-md shadow-xs col-12 js-alert-card">
            <div class="text-component line-height-lg">
                <h2 class="text-lg flex flex-wrap items-center">
                    <svg class="block icon icon--md margin-right-xxs color-accent" viewBox="0 0 32 32" aria-hidden="true">
                        <circle opacity="0.2" cx="16" cy="16" r="16"></circle>
                        <path opacity="0.2" d="M25.7,3.3A15.98,15.98,0,0,1,3.3,25.7,15.986,15.986,0,1,0,25.7,3.3Z"></path>
                        <circle opacity="0.2" cx="14" cy="9" r="3"></circle>
                        <circle opacity="0.2" cx="7.5" cy="16.5" r="1.5"></circle>
                        <circle opacity="0.2" cx="19.5" cy="18.5" r="2.5"></circle>
                    </svg>
                    <span>Hello <span class="font-normal">{{ Auth::user()->name }}</span></span>
                </h2>
            </div>

            <button class="reset alert-card__close-btn js-tab-focus js-alert-card__close-btn" style="outline: none;">
                <svg class="icon icon--xs" viewBox="0 0 16 16">
                    <title>Hide alert</title>
                    <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                        <line x1="1" y1="1" x2="15" y2="15"></line>
                        <line x1="15" y1="1" x2="1" y2="15"></line>
                    </g>
                </svg>
            </button>
        </div>

        <!-- stats card 1 -->
        <div class="stats-card bg radius-md padding-md shadow-xs col-12@sm col-6@xl">
        </div>

        <div class="stats-card bg radius-md padding-md shadow-xs col-12@sm col-6@xl">
        </div>

        <!-- interactive table -->
        <div class="bg radius-md padding-md shadow-xs col-12">
            <p class="color-contrast-medium margin-bottom-md">Interactive Table</p>

            <div class="int-table-actions padding-bottom-xxxs border-bottom border-contrast-lower" data-table-controls="interactive-table-1">
                <menu class="menu-bar js-int-table-actions__no-items-selected js-menu-bar menu-bar--collapsed menu-bar--loaded">
                    <li class="menu-bar__item " role="menuitem" tabindex="0">
                        <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <g>
                                <path d="M8,3c1.179,0,2.311,0.423,3.205,1.17L8.883,6.492l6.211,0.539L14.555,0.82l-1.93,1.93 C11.353,1.632,9.71,1,8,1C4.567,1,1.664,3.454,1.097,6.834l1.973,0.331C3.474,4.752,5.548,3,8,3z">
                                </path>
                                <path d="M8,13c-1.179,0-2.311-0.423-3.205-1.17l2.322-2.322L0.906,8.969l0.539,6.211l1.93-1.93 C4.647,14.368,6.29,15,8,15c3.433,0,6.336-2.454,6.903-5.834l-1.973-0.331C12.526,11.248,10.452,13,8,13z">
                                </path>
                            </g>
                        </svg>
                        <span class="menu-bar__label">Refresh</span>
                    </li>

                    <li class="menu-bar__item " role="menuitem" tabindex="-1">
                        <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <g>
                                <path d="M15,16H1c-0.6,0-1-0.4-1-1V3c0-0.6,0.4-1,1-1h3v2H2v10h12V9h2v6C16,15.6,15.6,16,15,16z">
                                </path>
                                <path d="M10,3c-3.2,0-6,2.5-6,7c1.1-1.7,2.4-3,6-3v3l6-5l-6-5V3z"></path>
                            </g>
                        </svg>
                        <span class="menu-bar__label">Export</span>
                    </li>
                </menu>

                <menu class="menu-bar is-hidden js-int-table-actions__items-selected js-menu-bar menu-bar--collapsed menu-bar--loaded">
                    <li class="menu-bar__item " role="menuitem" tabindex="0">
                        <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <g>
                                <path d="M2,6v8c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V6H2z"></path>
                                <path d="M12,3V1c0-0.6-0.4-1-1-1H5C4.4,0,4,0.4,4,1v2H0v2h16V3H12z M10,3H6V2h4V3z">
                                </path>
                            </g>
                        </svg>
                        <span class="menu-bar__label">Delete</span>
                    </li>

                    <li class="menu-bar__item " role="menuitem" tabindex="-1">
                        <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <g>
                                <path d="M15.977,4.887a.975.975,0,0,0-.04-.2.909.909,0,0,0-.089-.186,1.048,1.048,0,0,0-.048-.1l-3-4A1,1,0,0,0,12,0H4a1,1,0,0,0-.8.4l-3,4a1.048,1.048,0,0,0-.048.1.892.892,0,0,0-.089.187.957.957,0,0,0-.04.2A.885.885,0,0,0,0,5v9a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V5A.87.87,0,0,0,15.977,4.887ZM8,13.5,5,10H7V7H9v3h2ZM3,4,4.5,2h7L13,4Z">
                                </path>
                            </g>
                        </svg>
                        <span class="menu-bar__label">Archive</span>
                    </li>

                    <li class="menu-bar__item " role="menuitem" tabindex="-1">
                        <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <g>
                                <path d="M14.6,5.6l-8.2,8.2C6.9,13.9,7.5,14,8,14c3.6,0,6.4-3.1,7.6-4.9c0.5-0.7,0.5-1.6,0-2.3 C15.4,6.5,15,6.1,14.6,5.6z">
                                </path>
                                <path d="M14.3,0.3L11.6,3C10.5,2.4,9.3,2,8,2C4.4,2,1.6,5.1,0.4,6.9c-0.5,0.7-0.5,1.6,0,2.2c0.5,0.8,1.4,1.8,2.4,2.7 l-2.5,2.5c-0.4,0.4-0.4,1,0,1.4C0.5,15.9,0.7,16,1,16s0.5-0.1,0.7-0.3l14-14c0.4-0.4,0.4-1,0-1.4S14.7-0.1,14.3,0.3z M5.3,9.3 C5.1,8.9,5,8.5,5,8c0-1.7,1.3-3,3-3c0.5,0,0.9,0.1,1.3,0.3L5.3,9.3z">
                                </path>
                            </g>
                        </svg>
                        <span class="menu-bar__label">Hide</span>
                    </li>
                </menu>
            </div>

            <div id="interactive-table-1" class="int-table text-sm js-int-table">
                <div class="int-table__inner">
                    <table class="int-table__table" aria-label="Interactive table example">
                        <thead class="int-table__header js-int-table__header">
                            <tr class="int-table__row">
                                <td class="int-table__cell">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </td>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                    <div class="flex items-center">
                                        <span>ID</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                                            <polygon class="arrow-up" points="6 0 10 5 2 5 6 0"></polygon>
                                            <polygon class="arrow-down" points="6 12 2 7 10 7 6 12"></polygon>
                                        </svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingId" id="sortingIdNone" value="none" checked="">
                                            <label for="sortingIdNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingId" id="sortingIdAsc" value="asc">
                                            <label for="sortingIdAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingId" id="sortingIdDes" value="desc">
                                            <label for="sortingIdDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                    <div class="flex items-center">
                                        <span>Name</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                                            <polygon class="arrow-up" points="6 0 10 5 2 5 6 0"></polygon>
                                            <polygon class="arrow-down" points="6 12 2 7 10 7 6 12"></polygon>
                                        </svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingName" id="sortingNameNone" value="none" checked="">
                                            <label for="sortingNameNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingName" id="sortingNameAsc" value="asc">
                                            <label for="sortingNameAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingName" id="sortingNameDes" value="desc">
                                            <label for="sortingNameDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                    <div class="flex items-center">
                                        <span>Email</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                                            <polygon class="arrow-up" points="6 0 10 5 2 5 6 0"></polygon>
                                            <polygon class="arrow-down" points="6 12 2 7 10 7 6 12"></polygon>
                                        </svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingEmail" id="sortingEmailNone" value="none" checked="">
                                            <label for="sortingEmailNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingEmail" id="sortingEmailAsc" value="asc">
                                            <label for="sortingEmailAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingEmail" id="sortingEmailDes" value="desc">
                                            <label for="sortingEmailDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th text-left">
                                    Description
                                </th>

                                <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort" data-date-format="dd-mm-yyyy">
                                    <div class="flex items-center">
                                        <span>Date</span>

                                        <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                                            <polygon class="arrow-up" points="6 0 10 5 2 5 6 0"></polygon>
                                            <polygon class="arrow-down" points="6 12 2 7 10 7 6 12"></polygon>
                                        </svg>
                                    </div>

                                    <ul class="sr-only js-int-table__sort-list">
                                        <li>
                                            <input type="radio" name="sortingDate" id="sortingDateNone" value="none" checked="">
                                            <label for="sortingDateNone">No sorting</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingDate" id="sortingDateAsc" value="asc">
                                            <label for="sortingDateAsc">Sort in ascending order</label>
                                        </li>

                                        <li>
                                            <input type="radio" name="sortingDate" id="sortingDateDes" value="desc">
                                            <label for="sortingDateDes">Sort in descending order</label>
                                        </li>
                                    </ul>
                                </th>

                                <th class="int-table__cell int-table__cell--th text-left">Location</th>
                                <th class="int-table__cell int-table__cell--th text-right">Action</th>
                            </tr>
                        </thead>

                        <tbody class="int-table__body js-int-table__body">
                            <tr class="int-table__row" data-order="0">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">1</td>
                                <td class="int-table__cell"><a href="customer.html">Bryony Mcmillan</a></td>
                                <td class="int-table__cell">r.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">01/01/2021</td>
                                <td class="int-table__cell">Hungary</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="1">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">2</td>
                                <td class="int-table__cell"><a href="customer.html">Hetty Maxwell</a></td>
                                <td class="int-table__cell">f.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">11/10/2020</td>
                                <td class="int-table__cell">United Kingdom</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="2">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">3</td>
                                <td class="int-table__cell"><a href="customer.html">Honey Leblanc</a></td>
                                <td class="int-table__cell">v.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">17/09/2020</td>
                                <td class="int-table__cell">Maldives</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="3">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">4</td>
                                <td class="int-table__cell"><a href="customer.html">Maira Hodges</a></td>
                                <td class="int-table__cell">a.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">04/08/2020</td>
                                <td class="int-table__cell">Iceland</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="4">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">5</td>
                                <td class="int-table__cell"><a href="customer.html">Nigel Lang</a></td>
                                <td class="int-table__cell">g.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">03/07/2020</td>
                                <td class="int-table__cell">Italy</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="5">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">6</td>
                                <td class="int-table__cell"><a href="customer.html">Saif Acevedo</a></td>
                                <td class="int-table__cell">l.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">21/05/2020</td>
                                <td class="int-table__cell">Argentina</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="6">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">7</td>
                                <td class="int-table__cell"><a href="customer.html">Isaak O'Gallagher</a></td>
                                <td class="int-table__cell">b.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">11/04/2020</td>
                                <td class="int-table__cell">Maldives</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="7">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">8</td>
                                <td class="int-table__cell"><a href="customer.html">Lucille Arias</a></td>
                                <td class="int-table__cell">m.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">05/03/2020</td>
                                <td class="int-table__cell">Thailand</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="8">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">9</td>
                                <td class="int-table__cell"><a href="customer.html">Kendall Rankin</a></td>
                                <td class="int-table__cell">e.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">02/02/2020</td>
                                <td class="int-table__cell">Austria</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="int-table__row" data-order="9">
                                <th class="int-table__cell" scope="row">
                                    <div class="custom-checkbox int-table__checkbox">
                                        <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row">
                                        <div class="custom-checkbox__control" aria-hidden="true"></div>
                                    </div>
                                </th>
                                <td class="int-table__cell">10</td>
                                <td class="int-table__cell"><a href="customer.html">Raihan Boone</a></td>
                                <td class="int-table__cell">c.email@email.com</td>
                                <td class="int-table__cell text-truncate max-width-xxxxs">Lorem ipsum dolor sit
                                    amet consectetur adipisicing elit. Repellat eveniet nisi itaque!</td>
                                <td class="int-table__cell">01/01/2020</td>
                                <td class="int-table__cell">USA</td>
                                <td class="int-table__cell">
                                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example" aria-expanded="false" aria-haspopup="true" style="outline: none;">
                                        <svg class="icon" viewBox="0 0 16 16">
                                            <circle cx="8" cy="7.5" r="1.5"></circle>
                                            <circle cx="1.5" cy="7.5" r="1.5"></circle>
                                            <circle cx="14.5" cy="7.5" r="1.5"></circle>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex items-center justify-between padding-top-sm">
                <p class="text-sm">450 results</p>

                <nav class="pagination text-sm" aria-label="Pagination">
                    <ul class="pagination__list flex flex-wrap gap-xxxs">
                        <li>
                            <a href="#0" class="pagination__item">
                                <svg class="icon" viewBox="0 0 16 16">
                                    <title>Go to previous page</title>
                                    <g stroke-width="1.5" stroke="currentColor">
                                        <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,3.5 5,8 9.5,12.5 "></polyline>
                                    </g>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <span class="pagination__jumper flex items-center">
                                <input aria-label="Page number" class="form-control" type="text" id="pageNumber" name="pageNumber" value="1">
                                <em>of 50</em>
                            </span>
                        </li>

                        <li>
                            <a href="#0" class="pagination__item">
                                <svg class="icon" viewBox="0 0 16 16">
                                    <title>Go to next page</title>
                                    <g stroke-width="1.5" stroke="currentColor">
                                        <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <menu id="menu-example" class="menu js-menu" data-scrollable-element=".js-app-ui__body">
                <li role="menuitem">
                    <span class="menu__content js-menu__content" tabindex="0">
                        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12">
                            <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z">
                            </path>
                        </svg>
                        <span>Edit</span>
                    </span>
                </li>

                <li role="menuitem">
                    <span class="menu__content js-menu__content" tabindex="0">
                        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <path d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z">
                            </path>
                            <rect x="2" width="12" height="2"></rect>
                        </svg>
                        <span>Copy</span>
                    </span>
                </li>

                <li role="menuitem">
                    <span class="menu__content js-menu__content" tabindex="0">
                        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12">
                            <path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z">
                            </path>
                            <path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z">
                            </path>
                        </svg>
                        <span>Delete</span>
                    </span>
                </li>
            </menu>
        </div>

    </div>

</x-layout>
