(function() {
    
    window.onload = function() {
        
        var toggles = document.getElementsByClassName('js-tabbed');
        
        for(var i = 0; i < toggles.length; i++) {
            
            toggles[i].onclick = function() {
                
                var i, navigation, navigationItems, n, content, contentItems, c;
                navigation = this.parentNode;
                navigationItems = navigation.children;
                content = this.parentNode.parentNode.getElementsByClassName('js-tabbed-content')[0];
                contentItems = content.children;
                
                // Loop thru all navigation and content items, mark the correct one active
                for (i = 0; i < navigationItems.length; ++i) {
                    
                    n = navigationItems[i];
                    n.classList.remove('is-active');
                    
                    if (n.dataset.num == this.dataset.num) {
                        n.classList.add('is-active');
                    }
                    
                    c = contentItems[i];
                    c.classList.remove('is-active');
                    
                    if (c.dataset.num == this.dataset.num) {
                        c.classList.add('is-active');
                    }    
                    
                }
                
            }
            
        }
        
    }

})();