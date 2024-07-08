```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Generator (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Service**
> extends: ****
```uml
@startuml
class Generator  #Gold {
  + register(Container $container) : void
  + getGenerator(Container $container) : PowerGenerator
  + getClassInjectorBuilder(Container $container) : ClassInjectorBuilder
  + getServiceProviderBuilder(Container $container) : ServiceProviderBuilder
  + getSearch(Container $container) : Search
  + getClassInjector(Container $container) : ClassInjector
  + getServiceProvider(Container $container) : ServiceProvider
  + getBucket(Container $container) : Bucket
}

note right of Generator::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Generator::getGenerator
  Get the Generator

  since: 3.2.0
  return: PowerGenerator
end note

note right of Generator::getClassInjectorBuilder
  Get the Generator Class Injector Builder

  since: 3.2.0
  return: ClassInjectorBuilder
end note

note left of Generator::getServiceProviderBuilder
  Get the Generator Service Provider Builder

  since: 3.2.0
  return: ServiceProviderBuilder
end note

note right of Generator::getSearch
  Get the Generator Search

  since: 3.2.0
  return: Search
end note

note left of Generator::getClassInjector
  Get the Generator Class Injector

  since: 3.2.0
  return: ClassInjector
end note

note right of Generator::getServiceProvider
  Get the Generator Service Provider

  since: 3.2.0
  return: ServiceProvider
end note

note left of Generator::getBucket
  Get the Generator Bucket

  since: 3.2.0
  return: Bucket
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

