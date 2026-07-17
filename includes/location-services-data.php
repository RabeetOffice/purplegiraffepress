<?php
/* Single source of truth for the per-city service lists.
 *
 * Used by the location hubs (/locations/<city>.php) to render their service
 * grid, and by includes/location-services.php to render the "other services in
 * this city" block on every per-city service page.
 *
 * To add a new city: add a key below (lowercase, matching the locality you set
 * in $location_business on that city's pages) with a 'label' and its 'services'.
 * Every hub and service page for that city then picks the list up automatically,
 * so there is one place to maintain as the network of city pages grows.
 *
 * Each service: title, href (city service page, site-root relative), accent
 * [c1, c2, ink] for the card theme, short (card blurb), icon (raw SVG path
 * markup, reusing the site's icon set).
 */

if (!function_exists('pgp_location_services')) {
    function pgp_location_services($city = null) {
        static $data = null;
        if ($data === null) {
            $data = [
                'melbourne' => [
                    'label' => 'Melbourne',
                    'services' => [
                        ['title' => 'Book Editing', 'href' => 'childrens-book-editing-services-in-melbourne.php', 'accent' => ['#4fd1b0', '#19b890', '#053a2c'],
                         'short' => 'Developmental, line and copy editing, proofreading and manuscript assessment for picture books, early readers and junior fiction.',
                         'icon'  => '<path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path>'],
                        ['title' => 'Book Design', 'href' => 'childrens-book-designer-in-melbourne.php', 'accent' => ['#ff9f7d', '#ff7a59', '#4a1500'],
                         'short' => 'Illustration, page layout, cover design and KDP-ready formatting, built around your story for picture books and beyond.',
                         'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
                        ['title' => 'Ghostwriting', 'href' => 'ghostwriting-services-in-melbourne.php', 'accent' => ['#9b8cff', '#6f5bdc', '#1b1147'],
                         'short' => 'Share your idea and we write the whole manuscript in your voice, for children\'s books, fiction and personal family stories.',
                         'icon'  => '<path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path>'],
                        ['title' => 'Book Marketing', 'href' => 'book-promotion-services-in-melbourne.php', 'accent' => ['#6ec8ff', '#3aa0ff', '#042a4a'],
                         'short' => 'Promotion plans that get your book seen, from Amazon and Kindle visibility to local Melbourne bookshops, schools and reviews.',
                         'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
                        ['title' => 'Book Formatting', 'href' => 'childrens-book-formatting-in-melbourne.php', 'accent' => ['#5fd0c4', '#1fb5a6', '#043a34'],
                         'short' => 'Interior layout, fonts, image placement and print-ready and KDP files, formatted specifically for children\'s books.',
                         'icon'  => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path>'],
                        ['title' => 'Fiction Ghostwriting', 'href' => 'childrens-fiction-ghostwriter-in-melbourne.php', 'accent' => ['#c9b4ef', '#7a3dd1', '#2a0f52'],
                         'short' => 'You bring the idea, the characters, and the world. We write the full novel in your voice, from first chapter to last page.',
                         'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
                        ['title' => 'Custom Illustrations', 'href' => 'custom-childrens-book-illustrations-in-melbourne.php', 'accent' => ['#f7c948', '#f7a324', '#4a2e00'],
                         'short' => 'Character design, full page art, spot illustrations and cover art, matched to the mood, pacing and age group of your book.',
                         'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
                        ['title' => 'Proofreading', 'href' => 'childrens-book-proofreading-services-in-melbourne.php', 'accent' => ['#5ec6a8', '#19b890', '#053a2c'],
                         'short' => 'A careful final check of spelling, grammar, punctuation, layout and consistency before your book goes to print or online.',
                         'icon'  => '<path d="M20 6 9 17l-5-5"></path>'],
                        ['title' => 'Audiobook Production', 'href' => 'childrens-audiobook-production-services-melbourne.php', 'accent' => ['#7fd0ff', '#2f8fe6', '#042a4a'],
                         'short' => 'Professional narration, editing and mastering that turns your finished manuscript into an audiobook people want to listen to.',
                         'icon'  => '<path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path>'],
                        ['title' => 'Author Websites', 'href' => 'childrens-book-website-development-in-melbourne.php', 'accent' => ['#f08fe4', '#d957c9', '#4a0640'],
                         'short' => 'Creative, easy-to-navigate author websites that show off your books and help parents, teachers and librarians find you.',
                         'icon'  => '<rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path>'],
                        ['title' => 'Book Printing', 'href' => 'childrens-book-printing-in-melbourne.php', 'accent' => ['#ffd36e', '#f7a324', '#4a2e00'],
                         'short' => 'Premium hardback and paperback printing, with paper weight, binding and colour accuracy checked at every step.',
                         'icon'  => '<path d="M6 9V3h12v6M6 18h12v3H6zM4 9h16a2 2 0 0 1 2 2v5h-4v-2H6v2H2v-5a2 2 0 0 1 2-2Z"></path>'],
                        ['title' => 'Book Publishing', 'href' => 'childrens-book-publishers-in-melbourne.php', 'accent' => ['#7b35d0', '#52208f', '#ffffff'],
                         'short' => 'The logistics, ISBNs and platform registrations handled for you, from finished manuscript to a book readers can buy.',
                         'icon'  => '<path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path>'],
                        ['title' => 'Book Trailers', 'href' => 'childrens-book-trailers-service-in-melbourne.php', 'accent' => ['#9be7c4', '#3bbf86', '#053a2c'],
                         'short' => 'Short, animated trailers that give your story a voice and a face, built for social media, launches and school events.',
                         'icon'  => '<circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path>'],
                    ],
                ],
                'london' => [
                    'label' => 'London',
                    'services' => [
                        ['title' => 'Book Editing', 'href' => 'childrens-book-editors-in-london.php', 'accent' => ['#4fd1b0', '#19b890', '#053a2c'],
                         'short' => 'Developmental, line and copy editing, proofreading and manuscript assessment for picture books, early readers and junior fiction.',
                         'icon'  => '<path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path>'],
                        ['title' => 'Book Design', 'href' => 'professional-childrens-book-design-in-london.php', 'accent' => ['#ff9f7d', '#ff7a59', '#4a1500'],
                         'short' => 'Illustration, page layout, cover design and KDP-ready formatting, built around your story for picture books and beyond.',
                         'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
                        ['title' => 'Ghostwriting', 'href' => 'londons-ghostwriters-for-childrens-books.php', 'accent' => ['#9b8cff', '#6f5bdc', '#1b1147'],
                         'short' => 'Share your idea and we write the whole manuscript in your voice, for children\'s books, fiction and personal family stories.',
                         'icon'  => '<path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path>'],
                        ['title' => 'Book Marketing', 'href' => 'childrens-book-marketing-services-in-london.php', 'accent' => ['#6ec8ff', '#3aa0ff', '#042a4a'],
                         'short' => 'Promotion plans that get your book seen, from Amazon and Kindle visibility to local London bookshops, schools and reviews.',
                         'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
                        ['title' => 'Book Formatting', 'href' => 'childrens-book-formatting-services-in-london.php', 'accent' => ['#5fd0c4', '#1fb5a6', '#043a34'],
                         'short' => 'Interior layout, fonts, image placement and print-ready and KDP files, formatted specifically for children\'s books.',
                         'icon'  => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path>'],
                        ['title' => 'Fiction Ghostwriting', 'href' => 'childrens-fiction-ghostwriter-services-london.php', 'accent' => ['#c9b4ef', '#7a3dd1', '#2a0f52'],
                         'short' => 'You bring the idea, the characters, and the world. We write the full novel in your voice, from first chapter to last page.',
                         'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
                        ['title' => 'Custom Illustrations', 'href' => 'childrens-book-illustration-service-london.php', 'accent' => ['#f7c948', '#f7a324', '#4a2e00'],
                         'short' => 'Character design, full page art, spot illustrations and cover art, matched to the mood, pacing and age group of your book.',
                         'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
                        ['title' => 'Proofreading', 'href' => 'childrens-book-proofreading-services-london.php', 'accent' => ['#5ec6a8', '#19b890', '#053a2c'],
                         'short' => 'A careful final check of spelling, grammar, punctuation, layout and consistency before your book goes to print or online.',
                         'icon'  => '<path d="M20 6 9 17l-5-5"></path>'],
                        ['title' => 'Audiobook Production', 'href' => 'london-trusted-audiobook-production-experts.php', 'accent' => ['#7fd0ff', '#2f8fe6', '#042a4a'],
                         'short' => 'Professional narration, editing and mastering that turns your finished manuscript into an audiobook people want to listen to.',
                         'icon'  => '<path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path>'],
                        ['title' => 'Author Websites', 'href' => 'childrens-author-website-design-london.php', 'accent' => ['#f08fe4', '#d957c9', '#4a0640'],
                         'short' => 'Creative, easy-to-navigate author websites that show off your books and help parents, teachers and librarians find you.',
                         'icon'  => '<rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path>'],
                        ['title' => 'Book Printing', 'href' => 'childrens-book-printing-services-london.php', 'accent' => ['#ffd36e', '#f7a324', '#4a2e00'],
                         'short' => 'Premium hardback and paperback printing, with paper weight, binding and colour accuracy checked at every step.',
                         'icon'  => '<path d="M6 9V3h12v6M6 18h12v3H6zM4 9h16a2 2 0 0 1 2 2v5h-4v-2H6v2H2v-5a2 2 0 0 1 2-2Z"></path>'],
                        ['title' => 'Book Publishing', 'href' => 'childrens-book-publishing-in-london.php', 'accent' => ['#7b35d0', '#52208f', '#ffffff'],
                         'short' => 'The logistics, ISBNs and platform registrations handled for you, from finished manuscript to a book readers can buy.',
                         'icon'  => '<path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path>'],
                        ['title' => 'Book Trailers', 'href' => 'london-childrens-video-book-trailer-service.php', 'accent' => ['#9be7c4', '#3bbf86', '#053a2c'],
                         'short' => 'Short, animated trailers that give your story a voice and a face, built for social media, launches and school events.',
                         'icon'  => '<circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path>'],
                    ],
                ],
                'dublin' => [
                    'label' => 'Dublin',
                    'services' => [
                        ['title' => 'Book Editing', 'href' => 'childrens-book-editing-service-in-dublin.php', 'accent' => ['#4fd1b0', '#19b890', '#053a2c'],
                         'short' => 'Developmental, line and copy editing, proofreading and manuscript assessment for picture books, early readers and junior fiction.',
                         'icon'  => '<path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path>'],
                        ['title' => 'Book Design', 'href' => 'childrens-books-design-services-in-dublin.php', 'accent' => ['#ff9f7d', '#ff7a59', '#4a1500'],
                         'short' => 'Illustration, page layout, cover design and KDP-ready formatting, built around your story for picture books and beyond.',
                         'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
                        ['title' => 'Ghostwriting', 'href' => 'childrens-book-ghostwriting-services-in-dublin.php', 'accent' => ['#9b8cff', '#6f5bdc', '#1b1147'],
                         'short' => 'Share your idea and we write the whole manuscript in your voice, for children\'s books, fiction and personal family stories.',
                         'icon'  => '<path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path>'],
                        ['title' => 'Book Marketing', 'href' => 'book-marketing-services-in-dublin.php', 'accent' => ['#6ec8ff', '#3aa0ff', '#042a4a'],
                         'short' => 'Promotion plans that get your book seen, from Amazon and Kindle visibility to local Dublin bookshops, schools and reviews.',
                         'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
                        ['title' => 'Book Formatting', 'href' => 'childrens-book-formatting-service-in-dublin.php', 'accent' => ['#5fd0c4', '#1fb5a6', '#043a34'],
                         'short' => 'Interior layout, fonts, image placement and print-ready and KDP files, formatted specifically for children\'s books.',
                         'icon'  => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path>'],
                        ['title' => 'Fiction Ghostwriting', 'href' => 'childrens-book-fiction-ghostwriter-in-dublin.php', 'accent' => ['#c9b4ef', '#7a3dd1', '#2a0f52'],
                         'short' => 'You bring the idea, the characters, and the world. We write the full novel in your voice, from first chapter to last page.',
                         'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
                        ['title' => 'Custom Illustrations', 'href' => 'childrens-book-illustration-service-in-dublin.php', 'accent' => ['#f7c948', '#f7a324', '#4a2e00'],
                         'short' => 'Character design, full page art, spot illustrations and cover art, matched to the mood, pacing and age group of your book.',
                         'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
                        ['title' => 'Proofreading', 'href' => 'childrens-book-proofreading-in-dublin.php', 'accent' => ['#5ec6a8', '#19b890', '#053a2c'],
                         'short' => 'A careful final check of spelling, grammar, punctuation, layout and consistency before your book goes to print or online.',
                         'icon'  => '<path d="M20 6 9 17l-5-5"></path>'],
                        ['title' => 'Audiobook Production', 'href' => 'childrens-audiobook-service-in-dublin.php', 'accent' => ['#7fd0ff', '#2f8fe6', '#042a4a'],
                         'short' => 'Professional narration, editing and mastering that turns your finished manuscript into an audiobook people want to listen to.',
                         'icon'  => '<path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path>'],
                        ['title' => 'Author Websites', 'href' => 'childrens-author-website-design-and-development-in-dublin.php', 'accent' => ['#f08fe4', '#d957c9', '#4a0640'],
                         'short' => 'Creative, easy-to-navigate author websites that show off your books and help parents, teachers and librarians find you.',
                         'icon'  => '<rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path>'],
                        ['title' => 'Book Printing', 'href' => 'childrens-book-printing-services-in-dublin.php', 'accent' => ['#ffd36e', '#f7a324', '#4a2e00'],
                         'short' => 'Premium hardback and paperback printing, with paper weight, binding and colour accuracy checked at every step.',
                         'icon'  => '<path d="M6 9V3h12v6M6 18h12v3H6zM4 9h16a2 2 0 0 1 2 2v5h-4v-2H6v2H2v-5a2 2 0 0 1 2-2Z"></path>'],
                        ['title' => 'Book Publishing', 'href' => 'childrens-book-publishing-service-in-dublin.php', 'accent' => ['#7b35d0', '#52208f', '#ffffff'],
                         'short' => 'The logistics, ISBNs and platform registrations handled for you, from finished manuscript to a book readers can buy.',
                         'icon'  => '<path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path>'],
                        ['title' => 'Book Trailers', 'href' => 'childrens-book-trailers-service-in-dublin.php', 'accent' => ['#9be7c4', '#3bbf86', '#053a2c'],
                         'short' => 'Short, animated trailers that give your story a voice and a face, built for social media, launches and school events.',
                         'icon'  => '<circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path>'],
                    ],
                ],
            ];
        }
        if ($city === null) { return $data; }
        $key = strtolower(trim((string) $city));
        return $data[$key] ?? null;
    }
}
