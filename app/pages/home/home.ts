import {Page, Platform, NavController} from 'ionic-framework/ionic';
import {TabsPage} from '../tabs/tabs';

@Page({
  templateUrl: 'build/pages/home/home.html',
})
export class HomePage {
	constructor(platform: Platform, nav: NavController) {
        this.platform = platform;
		this.nav = nav;
    }
    navigate(){
       this.nav.push(TabsPage);
    }

}




