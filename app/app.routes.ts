import {provideRouter, RouterConfig, ROUTER_DIRECTIVES} from "@angular/router";
import {SplashComponent} from "./components/splash-component";

export const routes: RouterConfig = [
	{path: "", component: SplashComponent}
];

export const appRouterProviders = [
	provideRouter(routes)
];
