import {provideRouter, RouterConfig, ROUTER_DIRECTIVES} from "@angular/router";
import {CodingComponent} from "./components/coding-component";
import {SplashComponent} from "./components/splash-component";
import {TeachingComponent} from "./components/teaching-component";

export const routes: RouterConfig = [
	{path: "coding", component: CodingComponent},
	{path: "teaching", component: TeachingComponent},
	{path: "", component: SplashComponent}
];

export const appRouterProviders = [
	provideRouter(routes)
];
