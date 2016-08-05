import {provideRouter, RouterConfig, ROUTER_DIRECTIVES} from "@angular/router";
import {AdvocacyComponent} from "./components/advocacy-component";
import {CodingComponent} from "./components/coding-component";
import {SplashComponent} from "./components/splash-component";
import {TeachingComponent} from "./components/teaching-component";

export const routes: RouterConfig = [
	{path: "advocacy", component: AdvocacyComponent},
	{path: "coding", component: CodingComponent},
	{path: "teaching", component: TeachingComponent},
	{path: "", component: SplashComponent}
];

export const appRouterProviders = [
	provideRouter(routes)
];
