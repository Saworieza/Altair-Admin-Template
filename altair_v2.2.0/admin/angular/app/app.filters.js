altairApp
    .filter('multiSelectFilter', function () {
        return function (items, filterData) {
            if(filterData == undefined)
                return items;
            var keys = Object.keys(filterData);
            var filtered = [];
            var populate = true;

            for (var i = 0; i < items.length; i++) {
                var item = items[i];
                populate = true;
                for(var j = 0; j < keys.length ; j++){
                    if(filterData[keys[j]] != undefined){
                        if(filterData[keys[j]].length == 0 || filterData[keys[j]].contains(item[keys[j]])){
                            populate = true;
                        } else {
                            populate = false;
                            break;
                        }
                    }
                }
                if(populate){
                    filtered.push(item);
                }
            }
            return filtered;
        };
    })
    .filter("jsonDate", function() {
        return function(x) {
            if( x ) return new Date(x);
            else return null;
        };
    })
    .filter("initials", function() {
        return function(x) {
            if(x) {
                return x.split(' ').map(function (s) {
                    return s.charAt(0);
                }).join('');
            } else {
                return null;
            }
        };
    })
;