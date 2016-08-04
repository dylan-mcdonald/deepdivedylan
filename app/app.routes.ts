import {provideRouter, RouterConfig, ROUTER_DIRECTIVES} from "@angular/router";
import {SplashComponent} from "./components/splash-component";
import {TeachingComponent} from "./components/teaching-component";

export const routes: RouterConfig = [
	{path: "teaching", component: TeachingComponent},
	{path: "", component: SplashComponent}
];

export const appRouterProviders = [
	provideRouter(routes)
];
