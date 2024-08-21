```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Language (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Language  #Gold {
  + register(Container $container) : void
  + getCompilerLanguage(Container $container) : CompilerLanguage
  + getSet(Container $container) : Set
  + getPurge(Container $container) : Purge
  + getInsert(Container $container) : Insert
  + getUpdate(Container $container) : Update
  + getExtractor(Container $container) : Extractor
  + getFieldset(Container $container) : Fieldset
  + getMultilingual(Container $container) : Multilingual
  + getTranslation(Container $container) : Translation
}

note right of Language::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Language::getCompilerLanguage
  Get The Language Class.

  since: 3.2.0
  return: CompilerLanguage
end note

note right of Language::getSet
  Get The Set Class.

  since: 3.2.0
  return: Set
end note

note left of Language::getPurge
  Get The Purge Class.

  since: 5.0.2
  return: Purge
end note

note right of Language::getInsert
  Get The Insert Class.

  since: 5.0.2
  return: Insert
end note

note left of Language::getUpdate
  Get The Update Class.

  since: 5.0.2
  return: Update
end note

note right of Language::getExtractor
  Get The Extractor Class.

  since: 3.2.0
  return: Extractor
end note

note left of Language::getFieldset
  Get The Fieldset Class.

  since: 3.2.0
  return: Fieldset
end note

note right of Language::getMultilingual
  Get The Multilingual Class.

  since: 5.0.2
  return: Multilingual
end note

note left of Language::getTranslation
  Get The Translation Class.

  since: 3.2.0
  return: Translation
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---9f00e793_86f8_4ef9_b775_a3eb129f83c0---Power
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

