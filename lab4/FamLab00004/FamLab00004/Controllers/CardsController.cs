﻿using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using FamLab00004.Models;

namespace FamLab00004.Controllers
{
    public class CardsController : Controller
    {
        private Lab4Entities db = new Lab4Entities();

        // GET: Cards
        public ActionResult Index()
        {
            var cards = db.Cards.Include(c => c.BankAccount).Include(c => c.Card_Type);
            return View(cards.ToList());
        }

        // GET: Cards/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Card card = db.Cards.Find(id);
            if (card == null)
            {
                return HttpNotFound();
            }
            return View(card);
        }

        // GET: Cards/Create
        public ActionResult Create()
        {
            ViewBag.Account_ID = new SelectList(db.BankAccounts, "Account_ID", "Account_ID");
            ViewBag.Card_Type_ID = new SelectList(db.Card_Type, "Card_Type_ID", "Card_Type1");
            return View();
        }

        // POST: Cards/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "Card_ID,Card_Reg_Date,Account_ID,Card_Type_ID")] Card card)
        {
            if (ModelState.IsValid)
            {
                db.Cards.Add(card);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.Account_ID = new SelectList(db.BankAccounts, "Account_ID", "Account_ID", card.Account_ID);
            ViewBag.Card_Type_ID = new SelectList(db.Card_Type, "Card_Type_ID", "Card_Type1", card.Card_Type_ID);
            return View(card);
        }

        // GET: Cards/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Card card = db.Cards.Find(id);
            if (card == null)
            {
                return HttpNotFound();
            }
            ViewBag.Account_ID = new SelectList(db.BankAccounts, "Account_ID", "Account_ID", card.Account_ID);
            ViewBag.Card_Type_ID = new SelectList(db.Card_Type, "Card_Type_ID", "Card_Type1", card.Card_Type_ID);
            return View(card);
        }

        // POST: Cards/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "Card_ID,Card_Reg_Date,Account_ID,Card_Type_ID")] Card card)
        {
            if (ModelState.IsValid)
            {
                db.Entry(card).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.Account_ID = new SelectList(db.BankAccounts, "Account_ID", "Account_ID", card.Account_ID);
            ViewBag.Card_Type_ID = new SelectList(db.Card_Type, "Card_Type_ID", "Card_Type1", card.Card_Type_ID);
            return View(card);
        }

        // GET: Cards/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Card card = db.Cards.Find(id);
            if (card == null)
            {
                return HttpNotFound();
            }
            return View(card);
        }

        // POST: Cards/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Card card = db.Cards.Find(id);
            db.Cards.Remove(card);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
