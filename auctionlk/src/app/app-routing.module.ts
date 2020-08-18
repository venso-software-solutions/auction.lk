import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { SignupComponent } from './signup/signup.component';
import { LeasingAgentComponent } from './leasing-agent/leasing-agent.component';
import { PromoteAddComponent } from './promote-add/promote-add.component';
import { MembershipComponent } from './membership/membership.component';
import { InsuranceAgentComponent } from './insurance-agent/insurance-agent.component';
import { AreaAgentComponent } from './area-agent/area-agent.component';
import { CommonModule } from '@angular/common';
import { BrowserModule } from '@angular/platform-browser';
import { BuyNowComponent } from './buy-now/buy-now.component';
import { ProductComponent } from './product/product.component';
import { ItemComponent } from './item/item.component';
import { InsuranceAgentFormComponent } from './insurance-agent-form/insurance-agent-form.component';
import { AreaAgentFormComponent } from './area-agent-form/area-agent-form.component';
import { LeasingAgentFormComponent } from './leasing-agent-form/leasing-agent-form.component';


const routes: Routes = [
  // {
  //   path: "",
  //   redirectTo: "dashboard",
  //   pathMatch: "full"
  // },
  {
    path: '',
    component: HomeComponent
  },
  {
    path: 'signup',
    component: SignupComponent
  },
  {
    path: 'promoteAdd',
    component: PromoteAddComponent
  },
  {
    path: 'membership',
    component: MembershipComponent
  },
  {
    path: 'insuranceAgent',
    component: InsuranceAgentComponent
  },
  {
    path: 'areaAgent',
    component: AreaAgentComponent
  },
  {
    path: 'leasingAgent',
    component: LeasingAgentComponent
  },
  {
    path: 'insuranceAgentForm',
    component: InsuranceAgentFormComponent
  },
  {
    path: 'areaAgentForm',
    component: AreaAgentFormComponent
  },
  {
    path: 'leasingAgentForm',
    component: LeasingAgentFormComponent
  },
  {
    path: 'buynow',
    component: BuyNowComponent
  },
  {
    path: 'product',
    component: ProductComponent
  },
  {
    path: 'item',
    component: ItemComponent
  },
  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [CommonModule, BrowserModule, RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

