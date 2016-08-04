/**
 * Created by taxque on 7/07/16.
 */
angular.module('Pokedex')
    .filter('start', function () {
        return function (input, start) {
            if (!input || !input.length) { return; }

            start = +start;
            return input.slice(start);
        };
    })
    .filter('renderHTMLCorrectly', function($sce)
    {
        return function(stringToParse)
        {
            return $sce.trustAsHtml(stringToParse);
        }
    })
    .filter('normalize', function () {
        return function (input) {
            if (!input) return "";

            input = input
                .replace('♀', 'f')
                .replace('♂', 'm')
                .replace(/\W+/g, "");
            return input.toLowerCase();
        };
    })

    .filter('imageify', ['$filter', function ($filter) {
        return function (input) {
            var url = "img/pokemons/" + $filter('normalize')(input) + ".jpg";
            return url;
        };
    }]);
;