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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---a7101bbc_3c81_4b52_a4aa_522291f7594b---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

