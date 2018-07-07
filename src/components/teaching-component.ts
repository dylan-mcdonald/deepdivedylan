import {Component} from "@angular/core";
import {ActivatedRoute, Router} from "@angular/router";

@Component({
	templateUrl: "./templates/teaching.html"
})

export class TeachingComponent {
	constructor(private route: ActivatedRoute, private router: Router) {}
}
