import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { HomeComponent } from './home/home.component';
import { SignupComponent } from './signup/signup.component';
import { AreaAgentComponent } from './area-agent/area-agent.component';
import { InsuranceAgentComponent } from './insurance-agent/insurance-agent.component';
import { LeasingAgentComponent } from './leasing-agent/leasing-agent.component';
import { MembershipComponent } from './membership/membership.component';
import { PromoteAddComponent } from './promote-add/promote-add.component';
import { BuyNowComponent } from './buy-now/buy-now.component';
import { ProductComponent } from './product/product.component';
import { ItemComponent } from './item/item.component';
import { InsuranceAgentFormComponent } from './insurance-agent-form/insurance-agent-form.component';
import { AreaAgentFormComponent } from './area-agent-form/area-agent-form.component';
import { LeasingAgentFormComponent } from './leasing-agent-form/leasing-agent-form.component';

@NgModule({
  declarations: [
    AppComponent,
    FooterComponent,
    HeaderComponent,
    HomeComponent,
    SignupComponent,
    AreaAgentComponent,
    InsuranceAgentComponent,
    LeasingAgentComponent,
    MembershipComponent,
    PromoteAddComponent,
    BuyNowComponent,
    ProductComponent,
    ItemComponent,
    InsuranceAgentFormComponent,
    AreaAgentFormComponent,
    LeasingAgentFormComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
