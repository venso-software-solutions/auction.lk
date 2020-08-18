import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AreaAgentComponent } from './area-agent.component';

describe('AreaAgentComponent', () => {
  let component: AreaAgentComponent;
  let fixture: ComponentFixture<AreaAgentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AreaAgentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AreaAgentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
