```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Placefix (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**

```uml
@startuml
abstract Placefix  #Orange {
  + {static} _(string $string) : string
  + {static} b() : string
  + {static} d() : string
  + {static} _h(string $string) : string
  + {static} h() : string
}

note right of Placefix::_
  Get a prefix and suffix added to given string

  since: 3.2.0
  return: string
end note

note right of Placefix::b
  Get a open prefix

  since: 3.2.0
  return: string
end note

note right of Placefix::d
  Get a close suffix

  since: 3.2.0
  return: string
end note

note right of Placefix::_h
  Get a hash prefix and suffix added to given string

  since: 3.2.0
  return: string
end note

note right of Placefix::h
  Get a hash-fix

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---500f3a7f_c16d_4dd4_81b2_2df6776b5388---Power
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

