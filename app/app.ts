import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app.module';

// browserDynamicPlatform().bootstrapModule(AppModule);

const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule);
